---
layout: post
title:  "How to Use `kubectl debug` to Access a Kubernetes Node and Take a TCP Dump"
---

# How to Use `kubectl debug` to Access a Kubernetes Node and Take a TCP Dump

I recently had to troubleshoot network issues on an AKS cluster without direct access to the nodes. Initially, I thought I would need to create SSH keys and inject them into the nodes, which usually requires adding keys during cluster creation. Since this was a production cluster with live traffic, I wanted to minimize any changes. It was starting to seem like a complex task, and I wanted an easier solution. After doing a few Google searches, I stumbled across `kubectl debug`. In this post, I'll guide you through how to use `kubectl debug` to log into a cluster node and run diagnostics like `tcpdump`.

## What is `kubectl debug`?

`kubectl debug` is a powerful command introduced to enhance Kubernetes troubleshooting. It lets you create an ephemeral container within an existing pod or even directly access a node, which makes debugging much more straightforward compared to the old days of accessing nodes manually or trying to add debug tools to existing containers.

## Why Use `kubectl debug`?

Kubernetes abstracts away a lot of underlying infrastructure details, which is great for deploying apps—but not always so great for debugging. Sometimes, you need a closer look at the network or the actual system processes running on a node, and `kubectl debug` helps you get that level of access quickly.

## Setting Up `kubectl debug`

First things first, make sure that your Kubernetes version supports `kubectl debug`. This feature became stable in Kubernetes 1.20, so you need at least that version.

You will need permissions to create pods and interact with the filesystem on the host. In my case, I was able to get temporary cluster admin permissions.

Use the following command to get the name of the node you want to log into:

```bash
kubectl get nodes
```

Once you're sure your cluster is set up for debugging, you can move on to the fun part—getting into a node.

## Logging Into a Node

To log into a node, you can use the following command:

```bash
kubectl debug node/<node-name> -it --image=busybox
```

Here, you're using `kubectl debug` to access a node interactively (`-it`), and specifying an image (`busybox`) to use as the debug environment. Busybox is great because it provides a lightweight container with all the basic utilities.

Use the following to create a session with the node:

```bash
chroot /host
```

The `chroot /host` command changes the root directory of the current process to `/host`, allowing you to interact with the node's filesystem as if you were logged directly into it. This effectively provides you with full access to the node, which is especially useful for troubleshooting.

After running this command, you'll be in a shell session on the node, ready to execute commands.

By the way, you can do this on Minikube if you have it installed on your computer. Instead of being logged into an actual node, you'll be logged into the Docker container that Minikube runs on.

## Running `tcpdump`

Now that you’re logged into the node, let’s run `tcpdump` to analyze network traffic. Unfortunately, not all nodes have `tcpdump` pre-installed, so you may need to install it. If your node is running a Debian-based OS, you can use `apt` to install it:

```bash
apt-get update && apt-get install -y tcpdump
```

Once installed, you can start capturing packets using the following:

```bash
tcpdump host 10.10.10.10 -w <file>
```

This will allow you to capture any network traffic flowing through the specified host while writing it to a file, which can then be copied over to be used by something like Wireshark.

To copy the file off the host, you can use `kubectl cp`, for example:

```bash
kubectl cp <namespace>/<pod-name>:/path/to/your/file /local/path/to/destination
```

This command will help you transfer files from the container to your local machine.

## Cleaning Up

After you've done your debugging, remember to clean up to avoid leaving any lingering ephemeral containers:

```bash
kubectl delete pod <ephemeral-debug-pod>
```

## Wrapping Up

`kubectl debug` is a powerful tool that has transformed how I troubleshoot cluster issues and will continue to be a key part of my toolkit moving forward. Whether you're checking network configurations or trying to catch mysterious packets with `tcpdump`, having direct access to a node can save you tons of time and effort.

Try using `kubectl debug` the next time something doesn't look right in your cluster—you might just feel like a Kubernetes ninja.

You can read more about `kubectl debug` by reading the official Kubernetes documentation: [https://kubernetes.io/docs/tasks/debug/debug-cluster/kubectl-node-debug/](https://kubernetes.io/docs/tasks/debug/debug-cluster/kubectl-node-debug/)