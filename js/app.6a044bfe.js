(function (t) {
    function e(e) {
        for (var n, i, s = e[0], l = e[1], c = e[2], p = 0, d = []; p < s.length; p++) i = s[p], Object.prototype.hasOwnProperty.call(r, i) && r[i] && d.push(r[i][0]), r[i] = 0;
        for (n in l) Object.prototype.hasOwnProperty.call(l, n) && (t[n] = l[n]);
        u && u(e);
        while (d.length) d.shift()();
        return o.push.apply(o, c || []), a()
    }

    function a() {
        for (var t, e = 0; e < o.length; e++) {
            for (var a = o[e], n = !0, s = 1; s < a.length; s++) {
                var l = a[s];
                0 !== r[l] && (n = !1)
            }
            n && (o.splice(e--, 1), t = i(i.s = a[0]))
        }
        return t
    }
    var n = {},
        r = {
            app: 0
        },
        o = [];

    function i(e) {
        if (n[e]) return n[e].exports;
        var a = n[e] = {
            i: e,
            l: !1,
            exports: {}
        };
        return t[e].call(a.exports, a, a.exports, i), a.l = !0, a.exports
    }
    i.m = t, i.c = n, i.d = function (t, e, a) {
        i.o(t, e) || Object.defineProperty(t, e, {
            enumerable: !0,
            get: a
        })
    }, i.r = function (t) {
        "undefined" !== typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(t, "__esModule", {
            value: !0
        })
    }, i.t = function (t, e) {
        if (1 & e && (t = i(t)), 8 & e) return t;
        if (4 & e && "object" === typeof t && t && t.__esModule) return t;
        var a = Object.create(null);
        if (i.r(a), Object.defineProperty(a, "default", {
                enumerable: !0,
                value: t
            }), 2 & e && "string" != typeof t)
            for (var n in t) i.d(a, n, function (e) {
                return t[e]
            }.bind(null, n));
        return a
    }, i.n = function (t) {
        var e = t && t.__esModule ? function () {
            return t["default"]
        } : function () {
            return t
        };
        return i.d(e, "a", e), e
    }, i.o = function (t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, i.p = "/";
    var s = window["webpackJsonp"] = window["webpackJsonp"] || [],
        l = s.push.bind(s);
    s.push = e, s = s.slice();
    for (var c = 0; c < s.length; c++) e(s[c]);
    var u = l;
    o.push([0, "chunk-vendors"]), a()
})({
    0: function (t, e, a) {
        t.exports = a("56d7")
    },
    1182: function (t, e, a) {},
    "34ba": function (t, e, a) {
        "use strict";
        var n = a("1182"),
            r = a.n(n);
        r.a
    },
    "3a7d": function (t, e, a) {},
    "56d7": function (t, e, a) {
        "use strict";
        a.r(e);
        a("e260"), a("e6cf"), a("cca6"), a("a79d");
        var n = a("2b0e"),
            r = function () {
                var t = this,
                    e = t.$createElement,
                    a = t._self._c || e;
                return a("div", {
                    attrs: {
                        id: "app"
                    }
                }, [a("NavBar"), a("Main")], 1)
            },
            o = [],
            i = function () {
                var t = this,
                    e = t.$createElement,
                    a = t._self._c || e;
                return a("div", {
                    staticClass: "navbar bg-blue p-4 text-white content"
                }, [a("a", {
                    attrs: {
                        href: t.photographyUrl,
                        target: "_blank",
                        title: "Photography Portfolio"
                    }
                }, [a("font-awesome-icon", {
                    class: t.iconClasses,
                    attrs: {
                        icon: ["fas", "camera"]
                    }
                })], 1), a("a", {
                    attrs: {
                        href: t.githubUrl,
                        target: "_blank",
                        title: "Github"
                    }
                }, [a("font-awesome-icon", {
                    class: t.iconClasses,
                    attrs: {
                        icon: ["fab", "github"]
                    }
                })], 1), a("a", {
                    attrs: {
                        href: t.linkedinUrl,
                        target: "_blank",
                        title: "LinkedIn"
                    }
                }, [a("font-awesome-icon", {
                    class: t.iconClasses,
                    attrs: {
                        icon: ["fab", "linkedin"]
                    }
                })], 1), a("a", {
                    attrs: {
                        href: t.instagramUrl,
                        target: "_blank",
                        title: "Instagram"
                    }
                }, [a("font-awesome-icon", {
                    class: t.iconClasses,
                    attrs: {
                        icon: ["fab", "instagram"]
                    }
                })], 1)])
            },
            s = [],
            l = {
                name: "NavBar",
                data: function () {
                    return {
                        iconClasses: "m-2 iconStyle",
                        photographyUrl: "http://www.nathanalphotography.com",
                        githubUrl: "http://www.github.com/kingnathanal",
                        linkedinUrl: "http://linkedin.com/in/brittonwilliam",
                        instagramUrl: "https://www.instagram.com/kingnathanal/"
                    }
                }
            },
            c = l,
            u = (a("34ba"), a("2877")),
            p = Object(u["a"])(c, i, s, !1, null, null, null),
            d = p.exports,
            f = function () {
                var t = this,
                    e = t.$createElement,
                    a = t._self._c || e;
                return a("div", {
                    staticClass: "container-fluid h-100"
                }, [a("div", {
                    staticClass: "row bg-blue align-items-end header pb-3"
                }, [a("div", {
                    staticClass: "col"
                }, [a("div", {
                    staticClass: "mx-auto text-center justify-content-bottom"
                }, [a("div", {
                    staticClass: "card resume-card mx-auto"
                }, [a("div", {
                    staticClass: "card-body resume-container text-left"
                }, [a("div", {
                    staticClass: "container"
                }, [a("span", {
                    staticClass: "h4 skills-title w-100"
                }, [t._v("~ $ skills:")]), a("br"), a("br"), t._l(t.myskills, (function (e, n) {
                    return a("span", {
                        key: n,
                        staticClass: "badge skill-badge m-1 p-2",
                        class: t.getRandomBadgeColor(),
                        style: {
                            fontSize: t.getRandomFontSize()
                        }
                    }, [t._v(t._s(e))])
                })), a("br"), a("br"), a("span", {
                    staticClass: "h4 skills-title w-100"
                }, [t._v("~ $ experience:")]), a("br"), a("br"), a("p", [t._v("Sunsoft Technologies - Detroit, MI")]), a("p", [t._v("DXC Technology - Detroit, MI")]), a("p", [t._v("Covisint - Detroit, MI")]), a("p", [t._v("Hewlett Packard - Detroit, MI")]), a("p", [t._v("The State of Michigan - Lansing, MI")])], 2)])]), t._m(0), a("span", {
                    staticClass: "p-2 sidenote text-white"
                }, [t._v("Software Engineer, Full Stack DevOps Developer")])])])])])
            },
            b = [function () {
                var t = this,
                    e = t.$createElement,
                    a = t._self._c || e;
                return a("h1", {
                    staticClass: "namelogo"
                }, [t._v(" William "), a("span", {
                    staticClass: "lastname"
                }, [t._v("Britton Jr.")])])
            }],
            h = {
                name: "Main",
                data: function () {
                    return {
                        myskills: ["Java", "C#", ".Net", "HTML5", "CSS3", "JavaScript", "JQuery", "JSON", "Oracle/PLSQL", "Git", "Jenkins CI", "DevOps", "Tomcat", "IBM WebSphere", "Open Liberty"],
                        badgecolors: ["", "badge-primary", "badge-secondary", "badge-success", "badge-danger", "badge-warning", "badge-info", "badge-dark"]
                    }
                },
                methods: {
                    getRandomBadgeColor: function () {
                        var t = Math.floor(7 * Math.random() + 1);
                        return this.badgecolors[t]
                    },
                    getRandomFontSize: function () {
                        var t = Math.floor(25 * Math.random() + 12);
                        return t + "pt"
                    }
                }
            },
            g = h,
            m = (a("c266"), Object(u["a"])(g, f, b, !1, null, null, null)),
            v = m.exports,
            w = {
                name: "app",
                components: {
                    NavBar: d,
                    Main: v
                }
            },
            y = w,
            _ = Object(u["a"])(y, r, o, !1, null, null, null),
            C = _.exports,
            k = a("ecee"),
            M = a("c074"),
            O = a("f2d1"),
            S = a("ad3d");
        k["c"].add(O["a"], O["b"], O["d"], O["c"], M["a"]), n["a"].component("font-awesome-icon", S["a"]), n["a"].config.productionTip = !1, new n["a"]({
            render: function (t) {
                return t(C)
            }
        }).$mount("#app")
    },
    c266: function (t, e, a) {
        "use strict";
        var n = a("3a7d"),
            r = a.n(n);
        r.a
    }
});
//# sourceMappingURL=app.6a044bfe.js.map