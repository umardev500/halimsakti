_N_E = (window.webpackJsonp_N_E = window.webpackJsonp_N_E || []).push([
    [14],
    {
        0: function (n, e, t) {
            t("GcxT"), (n.exports = t("nOHt"));
        },
        "1TCz": function (n, e, t) {
            "use strict";
            t.r(e);
            var r = t("rePB"),
                o = t("nKUr"),
                i = t("k7Sn"),
                a = t.n(i),
                c = t("6y4a");
            t("H1Ta"),
                t("iGpf"),
                t("q4sD"),
                t("tyWD"),
                t("K7k0"),
                t("Szx7"),
                t("UiAS");
            function u(n, e) {
                var t = Object.keys(n);
                if (Object.getOwnPropertySymbols) {
                    var r = Object.getOwnPropertySymbols(n);
                    e &&
                        (r = r.filter(function (e) {
                            return Object.getOwnPropertyDescriptor(
                                n,
                                e
                            ).enumerable;
                        })),
                        t.push.apply(t, r);
                }
                return t;
            }
            function l(n) {
                for (var e = 1; e < arguments.length; e++) {
                    var t = null != arguments[e] ? arguments[e] : {};
                    e % 2
                        ? u(Object(t), !0).forEach(function (e) {
                              Object(r.a)(n, e, t[e]);
                          })
                        : Object.getOwnPropertyDescriptors
                        ? Object.defineProperties(
                              n,
                              Object.getOwnPropertyDescriptors(t)
                          )
                        : u(Object(t)).forEach(function (e) {
                              Object.defineProperty(
                                  n,
                                  e,
                                  Object.getOwnPropertyDescriptor(t, e)
                              );
                          });
                }
                return n;
            }
            var f = function (n) {
                var e = n.Component,
                    t = n.pageProps;
                return Object(o.jsx)(e, l({}, t));
            };
            e.default = Object(c.a)(
                f,
                l(
                    l({}, a.a),
                    {},
                    {
                        isLoader: !0,
                        skipInitialProps: !0,
                        loadLocaleFrom: function (n, e) {
                            return t("5bgu")(
                                "./".concat(n, "/").concat(e)
                            ).then(function (n) {
                                return n.default;
                            });
                        },
                    }
                )
            );
        },
        "5bgu": function (n, e, t) {
            var r = {
                "./en/common": ["7ubu", 10],
                "./en/common.json": ["7ubu", 10],
                "./id/common": ["CW/+", 11],
                "./id/common.json": ["CW/+", 11],
            };
            function o(n) {
                if (!t.o(r, n))
                    return Promise.resolve().then(function () {
                        var e = new Error("Cannot find module '" + n + "'");
                        throw ((e.code = "MODULE_NOT_FOUND"), e);
                    });
                var e = r[n],
                    o = e[0];
                return t.e(e[1]).then(function () {
                    return t.t(o, 3);
                });
            }
            (o.keys = function () {
                return Object.keys(r);
            }),
                (o.id = "5bgu"),
                (n.exports = o);
        },
        "6y4a": function (n, e, t) {
            "use strict";
            (function (n) {
                t.d(e, "a", function () {
                    return f;
                });
                var r = t("q1tI"),
                    o = t.n(r),
                    i = t("DlHX"),
                    a = t("iEHL"),
                    c = function () {
                        return (c =
                            Object.assign ||
                            function (n) {
                                for (
                                    var e, t = 1, r = arguments.length;
                                    t < r;
                                    t++
                                )
                                    for (var o in (e = arguments[t]))
                                        Object.prototype.hasOwnProperty.call(
                                            e,
                                            o
                                        ) && (n[o] = e[o]);
                                return n;
                            }).apply(this, arguments);
                    },
                    u = function (n, e, t, r) {
                        return new (t || (t = Promise))(function (o, i) {
                            function a(n) {
                                try {
                                    u(r.next(n));
                                } catch (e) {
                                    i(e);
                                }
                            }
                            function c(n) {
                                try {
                                    u(r.throw(n));
                                } catch (e) {
                                    i(e);
                                }
                            }
                            function u(n) {
                                var e;
                                n.done
                                    ? o(n.value)
                                    : ((e = n.value),
                                      e instanceof t
                                          ? e
                                          : new t(function (n) {
                                                n(e);
                                            })).then(a, c);
                            }
                            u((r = r.apply(n, e || [])).next());
                        });
                    },
                    l = function (n, e) {
                        var t,
                            r,
                            o,
                            i,
                            a = {
                                label: 0,
                                sent: function () {
                                    if (1 & o[0]) throw o[1];
                                    return o[1];
                                },
                                trys: [],
                                ops: [],
                            };
                        return (
                            (i = { next: c(0), throw: c(1), return: c(2) }),
                            "function" === typeof Symbol &&
                                (i[Symbol.iterator] = function () {
                                    return this;
                                }),
                            i
                        );
                        function c(i) {
                            return function (c) {
                                return (function (i) {
                                    if (t)
                                        throw new TypeError(
                                            "Generator is already executing."
                                        );
                                    for (; a; )
                                        try {
                                            if (
                                                ((t = 1),
                                                r &&
                                                    (o =
                                                        2 & i[0]
                                                            ? r.return
                                                            : i[0]
                                                            ? r.throw ||
                                                              ((o = r.return) &&
                                                                  o.call(r),
                                                              0)
                                                            : r.next) &&
                                                    !(o = o.call(r, i[1])).done)
                                            )
                                                return o;
                                            switch (
                                                ((r = 0),
                                                o && (i = [2 & i[0], o.value]),
                                                i[0])
                                            ) {
                                                case 0:
                                                case 1:
                                                    o = i;
                                                    break;
                                                case 4:
                                                    return (
                                                        a.label++,
                                                        {
                                                            value: i[1],
                                                            done: !1,
                                                        }
                                                    );
                                                case 5:
                                                    a.label++,
                                                        (r = i[1]),
                                                        (i = [0]);
                                                    continue;
                                                case 7:
                                                    (i = a.ops.pop()),
                                                        a.trys.pop();
                                                    continue;
                                                default:
                                                    if (
                                                        !(o =
                                                            (o = a.trys)
                                                                .length > 0 &&
                                                            o[o.length - 1]) &&
                                                        (6 === i[0] ||
                                                            2 === i[0])
                                                    ) {
                                                        a = 0;
                                                        continue;
                                                    }
                                                    if (
                                                        3 === i[0] &&
                                                        (!o ||
                                                            (i[1] > o[0] &&
                                                                i[1] < o[3]))
                                                    ) {
                                                        a.label = i[1];
                                                        break;
                                                    }
                                                    if (
                                                        6 === i[0] &&
                                                        a.label < o[1]
                                                    ) {
                                                        (a.label = o[1]),
                                                            (o = i);
                                                        break;
                                                    }
                                                    if (o && a.label < o[2]) {
                                                        (a.label = o[2]),
                                                            a.ops.push(i);
                                                        break;
                                                    }
                                                    o[2] && a.ops.pop(),
                                                        a.trys.pop();
                                                    continue;
                                            }
                                            i = e.call(n, a);
                                        } catch (c) {
                                            (i = [6, c]), (r = 0);
                                        } finally {
                                            t = o = 0;
                                        }
                                    if (5 & i[0]) throw i[1];
                                    return {
                                        value: i[0] ? i[1] : void 0,
                                        done: !0,
                                    };
                                })([i, c]);
                            };
                        }
                    };
                function f(e, t) {
                    var r = this;
                    function f(n) {
                        var r,
                            a,
                            u = t.defaultLocale;
                        return o.a.createElement(
                            i.a,
                            {
                                lang:
                                    (null === (r = n.pageProps) || void 0 === r
                                        ? void 0
                                        : r.__lang) ||
                                    n.__lang ||
                                    u,
                                namespaces:
                                    (null === (a = n.pageProps) || void 0 === a
                                        ? void 0
                                        : a.__namespaces) || n.__namespaces,
                                config: t,
                            },
                            o.a.createElement(e, c({}, n))
                        );
                    }
                    return (
                        void 0 === t && (t = {}),
                        t.isLoader ||
                            !1 === t.loader ||
                            console.warn(
                                '\ud83d\udea8 [next-translate] You can remove the "appWithI18n" HoC on the _app.js, unless you set "loader: false" in your i18n config file.'
                            ),
                        "undefined" === typeof window
                            ? (n.i18nConfig = t)
                            : (window.i18nConfig = t),
                        t.skipInitialProps ||
                            (f.getInitialProps = function (n) {
                                return u(r, void 0, void 0, function () {
                                    var r, o, i;
                                    return l(this, function (u) {
                                        switch (u.label) {
                                            case 0:
                                                return (
                                                    (r = c(
                                                        c({}, n.ctx || {}),
                                                        n || {}
                                                    )),
                                                    (o = { pageProps: {} }),
                                                    e.getInitialProps
                                                        ? [
                                                              4,
                                                              e.getInitialProps(
                                                                  n
                                                              ),
                                                          ]
                                                        : [3, 2]
                                                );
                                            case 1:
                                                (o = u.sent() || {}),
                                                    (u.label = 2);
                                            case 2:
                                                return (
                                                    (i = [c({}, o)]),
                                                    [
                                                        4,
                                                        Object(a.a)(
                                                            c(c(c({}, r), t), {
                                                                loaderName:
                                                                    "getInitialProps",
                                                            })
                                                        ),
                                                    ]
                                                );
                                            case 3:
                                                return [
                                                    2,
                                                    c.apply(
                                                        void 0,
                                                        i.concat([u.sent()])
                                                    ),
                                                ];
                                        }
                                    });
                                });
                            }),
                        f
                    );
                }
            }.call(this, t("yLpj")));
        },
        "8Q/q": function (n, e, t) {
            "use strict";
            var r = t("q1tI");
            e.a = Object(r.createContext)({
                t: function (n) {
                    return Array.isArray(n) ? n[0] : n;
                },
                lang: "",
            });
        },
        DlHX: function (n, e, t) {
            "use strict";
            t.d(e, "a", function () {
                return y;
            });
            var r = t("q1tI"),
                o = t.n(r),
                i = t("nOHt"),
                a = t("8Q/q"),
                c = function () {
                    return (c =
                        Object.assign ||
                        function (n) {
                            for (var e, t = 1, r = arguments.length; t < r; t++)
                                for (var o in (e = arguments[t]))
                                    Object.prototype.hasOwnProperty.call(
                                        e,
                                        o
                                    ) && (n[o] = e[o]);
                            return n;
                        }).apply(this, arguments);
                };
            function u(n) {
                var e = n.config,
                    t = n.allNamespaces,
                    r = n.pluralRules,
                    o = e.logger,
                    i = void 0 === o ? s : o;
                return function n(o, a, u) {
                    void 0 === o && (o = "");
                    var s = Array.isArray(o) ? o[0] : o,
                        p = s.split(/:(.+)/),
                        d = p[0],
                        v = p[1],
                        y = t[d] || {},
                        b = (function (n, e, t, r) {
                            if (!r || "number" !== typeof r.count) return t;
                            var o = t + "_" + r.count;
                            if (void 0 !== l(e, o)) return o;
                            var i = t + "_" + n.select(r.count);
                            if (r.count > 1 && void 0 !== l(e, i)) return i;
                            var a = t + "." + r.count;
                            if (void 0 !== l(e, a)) return a;
                            var c = t + "." + n.select(r.count);
                            return void 0 !== l(e, c) ? c : t;
                        })(r, y, v, a),
                        h = l(y, b, u),
                        g =
                            "undefined" === typeof h ||
                            ("object" === typeof h && !Object.keys(h).length),
                        w =
                            "string" ===
                            typeof (null === u || void 0 === u
                                ? void 0
                                : u.fallback)
                                ? [u.fallback]
                                : (null === u || void 0 === u
                                      ? void 0
                                      : u.fallback) || [];
                    if (
                        ("undefined" !== typeof window &&
                            g &&
                            i({ namespace: d, i18nKey: v }),
                        g && Array.isArray(w) && w.length)
                    ) {
                        var m = w[0],
                            O = w.slice(1);
                        if ("string" === typeof m)
                            return n(m, a, c(c({}, u), { fallback: O }));
                    }
                    return h instanceof Object
                        ? (function n(e) {
                              var t = e.obj,
                                  r = e.query,
                                  o = e.config;
                              return r && 0 !== Object.keys(r).length
                                  ? (Object.keys(t).forEach(function (e) {
                                        t[e] instanceof Object &&
                                            n({
                                                obj: t[e],
                                                query: r,
                                                config: o,
                                            }),
                                            "string" === typeof t[e] &&
                                                (t[e] = f({
                                                    text: t[e],
                                                    query: r,
                                                    config: o,
                                                }));
                                    }),
                                    t)
                                  : t;
                          })({ obj: h, query: a, config: e })
                        : f({ text: h, query: a, config: e }) || s;
                };
            }
            function l(n, e, t) {
                void 0 === e && (e = ""),
                    void 0 === t && (t = { returnObjects: !1 });
                var r = e.split(".").reduce(function (n, e) {
                    return "string" === typeof n ? {} : n[e] || {};
                }, n);
                if (
                    "string" === typeof r ||
                    (r instanceof Object && t.returnObjects)
                )
                    return r;
            }
            function f(n) {
                var e = n.text,
                    t = n.query,
                    r = n.config;
                if (!e || !t) return e || "";
                var o = function (n) {
                        return n.replace(/[-\/\\^$*+?.()|[\]{}]/g, "\\$&");
                    },
                    i = r.interpolation,
                    a = void 0 === i ? { prefix: "{{", suffix: "}}" } : i,
                    c = a.prefix,
                    u = a.suffix;
                return Object.keys(t).reduce(function (n, e) {
                    var r = new RegExp(o(c) + "\\s*" + e + "\\s*" + o(u), "gm");
                    return (n = n.replace(r, "" + t[e]));
                }, e);
            }
            function s(n) {
                n.namespace, n.i18nKey;
            }
            var p = t("nbPw"),
                d = function () {
                    return (d =
                        Object.assign ||
                        function (n) {
                            for (var e, t = 1, r = arguments.length; t < r; t++)
                                for (var o in (e = arguments[t]))
                                    Object.prototype.hasOwnProperty.call(
                                        e,
                                        o
                                    ) && (n[o] = e[o]);
                            return n;
                        }).apply(this, arguments);
                },
                v = Object(r.createContext)({ ns: {}, config: {} });
            function y(n) {
                var e = n.lang,
                    t = n.namespaces,
                    c = void 0 === t ? {} : t,
                    l = n.children,
                    f = n.config,
                    s = void 0 === f ? {} : f,
                    y = Object(p.a)().lang,
                    b = Object(i.useRouter)() || {},
                    h = b.locale,
                    g = b.defaultLocale,
                    w = e || y || h || g || "",
                    m = Object(r.useContext)(v),
                    O = d(d({}, m.ns), c),
                    j = new Intl.PluralRules(w),
                    x = d(d({}, m.config), s),
                    P = u({ config: x, allNamespaces: O, pluralRules: j });
                return o.a.createElement(
                    a.a.Provider,
                    { value: { lang: w, t: P } },
                    o.a.createElement(
                        v.Provider,
                        { value: { ns: O, config: x } },
                        l
                    )
                );
            }
        },
        GcxT: function (n, e, t) {
            (window.__NEXT_P = window.__NEXT_P || []).push([
                "/_app",
                function () {
                    return t("1TCz");
                },
            ]);
        },
        H1Ta: function (n, e, t) {},
        K7k0: function (n, e, t) {},
        Szx7: function (n, e, t) {},
        UiAS: function (n, e, t) {},
        iEHL: function (n, e, t) {
            "use strict";
            t.d(e, "a", function () {
                return p;
            });
            var r = t("tX2r"),
                o = function (n, e, t, r) {
                    return new (t || (t = Promise))(function (o, i) {
                        function a(n) {
                            try {
                                u(r.next(n));
                            } catch (e) {
                                i(e);
                            }
                        }
                        function c(n) {
                            try {
                                u(r.throw(n));
                            } catch (e) {
                                i(e);
                            }
                        }
                        function u(n) {
                            var e;
                            n.done
                                ? o(n.value)
                                : ((e = n.value),
                                  e instanceof t
                                      ? e
                                      : new t(function (n) {
                                            n(e);
                                        })).then(a, c);
                        }
                        u((r = r.apply(n, e || [])).next());
                    });
                },
                i = function (n, e) {
                    var t,
                        r,
                        o,
                        i,
                        a = {
                            label: 0,
                            sent: function () {
                                if (1 & o[0]) throw o[1];
                                return o[1];
                            },
                            trys: [],
                            ops: [],
                        };
                    return (
                        (i = { next: c(0), throw: c(1), return: c(2) }),
                        "function" === typeof Symbol &&
                            (i[Symbol.iterator] = function () {
                                return this;
                            }),
                        i
                    );
                    function c(i) {
                        return function (c) {
                            return (function (i) {
                                if (t)
                                    throw new TypeError(
                                        "Generator is already executing."
                                    );
                                for (; a; )
                                    try {
                                        if (
                                            ((t = 1),
                                            r &&
                                                (o =
                                                    2 & i[0]
                                                        ? r.return
                                                        : i[0]
                                                        ? r.throw ||
                                                          ((o = r.return) &&
                                                              o.call(r),
                                                          0)
                                                        : r.next) &&
                                                !(o = o.call(r, i[1])).done)
                                        )
                                            return o;
                                        switch (
                                            ((r = 0),
                                            o && (i = [2 & i[0], o.value]),
                                            i[0])
                                        ) {
                                            case 0:
                                            case 1:
                                                o = i;
                                                break;
                                            case 4:
                                                return (
                                                    a.label++,
                                                    { value: i[1], done: !1 }
                                                );
                                            case 5:
                                                a.label++,
                                                    (r = i[1]),
                                                    (i = [0]);
                                                continue;
                                            case 7:
                                                (i = a.ops.pop()), a.trys.pop();
                                                continue;
                                            default:
                                                if (
                                                    !(o =
                                                        (o = a.trys).length >
                                                            0 &&
                                                        o[o.length - 1]) &&
                                                    (6 === i[0] || 2 === i[0])
                                                ) {
                                                    a = 0;
                                                    continue;
                                                }
                                                if (
                                                    3 === i[0] &&
                                                    (!o ||
                                                        (i[1] > o[0] &&
                                                            i[1] < o[3]))
                                                ) {
                                                    a.label = i[1];
                                                    break;
                                                }
                                                if (
                                                    6 === i[0] &&
                                                    a.label < o[1]
                                                ) {
                                                    (a.label = o[1]), (o = i);
                                                    break;
                                                }
                                                if (o && a.label < o[2]) {
                                                    (a.label = o[2]),
                                                        a.ops.push(i);
                                                    break;
                                                }
                                                o[2] && a.ops.pop(),
                                                    a.trys.pop();
                                                continue;
                                        }
                                        i = e.call(n, a);
                                    } catch (c) {
                                        (i = [6, c]), (r = 0);
                                    } finally {
                                        t = o = 0;
                                    }
                                if (5 & i[0]) throw i[1];
                                return {
                                    value: i[0] ? i[1] : void 0,
                                    done: !0,
                                };
                            })([i, c]);
                        };
                    }
                },
                a = function () {
                    for (var n = 0, e = 0, t = arguments.length; e < t; e++)
                        n += arguments[e].length;
                    var r = Array(n),
                        o = 0;
                    for (e = 0; e < t; e++)
                        for (
                            var i = arguments[e], a = 0, c = i.length;
                            a < c;
                            a++, o++
                        )
                            r[o] = i[a];
                    return r;
                };
            function c(n) {
                return n.reduce(function (n, e) {
                    return n.concat(e);
                }, []);
            }
            function u(n, e, t) {
                var r = n.pages,
                    u = void 0 === r ? {} : r;
                return o(this, void 0, void 0, function () {
                    var n,
                        r,
                        l,
                        f,
                        s = this;
                    return i(this, function (p) {
                        switch (p.label) {
                            case 0:
                                return (
                                    "rgx:",
                                    (n = function (n) {
                                        return o(
                                            s,
                                            void 0,
                                            void 0,
                                            function () {
                                                return i(this, function (e) {
                                                    return [
                                                        2,
                                                        "function" === typeof n
                                                            ? n(t)
                                                            : n || [],
                                                    ];
                                                });
                                            }
                                        );
                                    }),
                                    (r = Object.keys(u).reduce(function (t, r) {
                                        return (
                                            "rgx:" ===
                                                r.substring(0, "rgx:".length) &&
                                                new RegExp(
                                                    r.replace("rgx:", "")
                                                ).test(e) &&
                                                t.push(n(u[r])),
                                            t
                                        );
                                    }, [])),
                                    [4, n(u["*"])]
                                );
                            case 1:
                                return (l = [p.sent()]), [4, n(u[e])];
                            case 2:
                                return (
                                    (l = l.concat([p.sent()])),
                                    (f = c),
                                    [4, Promise.all(r)]
                                );
                            case 3:
                                return [
                                    2,
                                    a.apply(
                                        void 0,
                                        l.concat([f.apply(void 0, [p.sent()])])
                                    ),
                                ];
                        }
                    });
                });
            }
            var l = function () {
                    return (l =
                        Object.assign ||
                        function (n) {
                            for (var e, t = 1, r = arguments.length; t < r; t++)
                                for (var o in (e = arguments[t]))
                                    Object.prototype.hasOwnProperty.call(
                                        e,
                                        o
                                    ) && (n[o] = e[o]);
                            return n;
                        }).apply(this, arguments);
                },
                f = function (n, e, t, r) {
                    return new (t || (t = Promise))(function (o, i) {
                        function a(n) {
                            try {
                                u(r.next(n));
                            } catch (e) {
                                i(e);
                            }
                        }
                        function c(n) {
                            try {
                                u(r.throw(n));
                            } catch (e) {
                                i(e);
                            }
                        }
                        function u(n) {
                            var e;
                            n.done
                                ? o(n.value)
                                : ((e = n.value),
                                  e instanceof t
                                      ? e
                                      : new t(function (n) {
                                            n(e);
                                        })).then(a, c);
                        }
                        u((r = r.apply(n, e || [])).next());
                    });
                },
                s = function (n, e) {
                    var t,
                        r,
                        o,
                        i,
                        a = {
                            label: 0,
                            sent: function () {
                                if (1 & o[0]) throw o[1];
                                return o[1];
                            },
                            trys: [],
                            ops: [],
                        };
                    return (
                        (i = { next: c(0), throw: c(1), return: c(2) }),
                        "function" === typeof Symbol &&
                            (i[Symbol.iterator] = function () {
                                return this;
                            }),
                        i
                    );
                    function c(i) {
                        return function (c) {
                            return (function (i) {
                                if (t)
                                    throw new TypeError(
                                        "Generator is already executing."
                                    );
                                for (; a; )
                                    try {
                                        if (
                                            ((t = 1),
                                            r &&
                                                (o =
                                                    2 & i[0]
                                                        ? r.return
                                                        : i[0]
                                                        ? r.throw ||
                                                          ((o = r.return) &&
                                                              o.call(r),
                                                          0)
                                                        : r.next) &&
                                                !(o = o.call(r, i[1])).done)
                                        )
                                            return o;
                                        switch (
                                            ((r = 0),
                                            o && (i = [2 & i[0], o.value]),
                                            i[0])
                                        ) {
                                            case 0:
                                            case 1:
                                                o = i;
                                                break;
                                            case 4:
                                                return (
                                                    a.label++,
                                                    { value: i[1], done: !1 }
                                                );
                                            case 5:
                                                a.label++,
                                                    (r = i[1]),
                                                    (i = [0]);
                                                continue;
                                            case 7:
                                                (i = a.ops.pop()), a.trys.pop();
                                                continue;
                                            default:
                                                if (
                                                    !(o =
                                                        (o = a.trys).length >
                                                            0 &&
                                                        o[o.length - 1]) &&
                                                    (6 === i[0] || 2 === i[0])
                                                ) {
                                                    a = 0;
                                                    continue;
                                                }
                                                if (
                                                    3 === i[0] &&
                                                    (!o ||
                                                        (i[1] > o[0] &&
                                                            i[1] < o[3]))
                                                ) {
                                                    a.label = i[1];
                                                    break;
                                                }
                                                if (
                                                    6 === i[0] &&
                                                    a.label < o[1]
                                                ) {
                                                    (a.label = o[1]), (o = i);
                                                    break;
                                                }
                                                if (o && a.label < o[2]) {
                                                    (a.label = o[2]),
                                                        a.ops.push(i);
                                                    break;
                                                }
                                                o[2] && a.ops.pop(),
                                                    a.trys.pop();
                                                continue;
                                        }
                                        i = e.call(n, a);
                                    } catch (c) {
                                        (i = [6, c]), (r = 0);
                                    } finally {
                                        t = o = 0;
                                    }
                                if (5 & i[0]) throw i[1];
                                return {
                                    value: i[0] ? i[1] : void 0,
                                    done: !0,
                                };
                            })([i, c]);
                        };
                    }
                };
            function p(n) {
                var e;
                return (
                    void 0 === n && (n = {}),
                    f(this, void 0, void 0, function () {
                        var t, o, i, a, c, f, p;
                        return s(this, function (s) {
                            switch (s.label) {
                                case 0:
                                    return (
                                        (t = l(l({}, Object(r.a)()), n)),
                                        (o =
                                            t.locale ||
                                            (null === (e = t.router) ||
                                            void 0 === e
                                                ? void 0
                                                : e.locale) ||
                                            t.defaultLocale ||
                                            ""),
                                        t.pathname
                                            ? (t.loaderName ||
                                                  !1 === t.loader ||
                                                  console.warn(
                                                      '\ud83d\udea8 [next-translate] You can remove the "loadNamespaces" helper, unless you set "loader: false" in your i18n config file.'
                                                  ),
                                              (i =
                                                  (function (n) {
                                                      void 0 === n && (n = "");
                                                      return n.length > 1 &&
                                                          n.endsWith("/")
                                                          ? n.slice(0, -1)
                                                          : n;
                                                  })(
                                                      t.pathname.replace(
                                                          /\/index$/,
                                                          ""
                                                      )
                                                  ) || "/"),
                                              [4, u(t, i, t)])
                                            : (console.warn(
                                                  '\ud83d\udea8 [next-translate] You forgot to pass the "pathname" inside "loadNamespaces" configuration'
                                              ),
                                              [2, { __lang: o }])
                                    );
                                case 1:
                                    return (
                                        (a = s.sent()),
                                        (c = function (n, e) {
                                            return Promise.resolve({});
                                        }),
                                        [
                                            4,
                                            Promise.all(
                                                a.map(function (n) {
                                                    return "function" ===
                                                        typeof t.loadLocaleFrom
                                                        ? t.loadLocaleFrom(o, n)
                                                        : c();
                                                })
                                            ).catch(function () {}),
                                        ]
                                    );
                                case 2:
                                    return (
                                        (f = s.sent() || []),
                                        !1 !== t.logBuild &&
                                            "undefined" === typeof window &&
                                            ((p = function (n) {
                                                return (
                                                    "\x1b[36m" + n + "\x1b[0m"
                                                );
                                            }),
                                            console.log(
                                                p("next-translate"),
                                                "- compiled page:",
                                                p(i),
                                                "- locale:",
                                                p(o),
                                                "- namespaces:",
                                                p(a.join(", ")),
                                                "- used loader:",
                                                p(t.loaderName || "-")
                                            )),
                                        [
                                            2,
                                            {
                                                __lang: o,
                                                __namespaces: a.reduce(
                                                    function (n, e, t) {
                                                        return (n[e] = f[t]), n;
                                                    },
                                                    {}
                                                ),
                                            },
                                        ]
                                    );
                            }
                        });
                    })
                );
            }
        },
        iGpf: function (n, e, t) {},
        k7Sn: function (n, e) {
            n.exports = {
                locales: ["en", "id"],
                defaultLocale: "en",
                pages: { "*": ["common"] },
            };
        },
        nbPw: function (n, e, t) {
            "use strict";
            t.d(e, "a", function () {
                return c;
            });
            var r = t("q1tI");
            function o(n, e) {
                if ("string" !== typeof e) return n;
                return function (t, r, o) {
                    void 0 === t && (t = "");
                    var i = Array.isArray(t) ? t[0] : t;
                    return i.includes(":") || (i = e + ":" + i), n(i, r, o);
                };
            }
            var i = t("8Q/q"),
                a = function () {
                    return (a =
                        Object.assign ||
                        function (n) {
                            for (var e, t = 1, r = arguments.length; t < r; t++)
                                for (var o in (e = arguments[t]))
                                    Object.prototype.hasOwnProperty.call(
                                        e,
                                        o
                                    ) && (n[o] = e[o]);
                            return n;
                        }).apply(this, arguments);
                };
            function c(n) {
                var e = Object(r.useContext)(i.a);
                return a(a({}, e), { t: o(e.t, n) });
            }
        },
        q4sD: function (n, e, t) {},
        rePB: function (n, e, t) {
            "use strict";
            function r(n, e, t) {
                return (
                    e in n
                        ? Object.defineProperty(n, e, {
                              value: t,
                              enumerable: !0,
                              configurable: !0,
                              writable: !0,
                          })
                        : (n[e] = t),
                    n
                );
            }
            t.d(e, "a", function () {
                return r;
            });
        },
        tX2r: function (n, e, t) {
            "use strict";
            (function (n) {
                function r() {
                    return ("undefined" === typeof window ? n : window)
                        .i18nConfig;
                }
                t.d(e, "a", function () {
                    return r;
                });
            }.call(this, t("yLpj")));
        },
        tyWD: function (n, e, t) {},
        yLpj: function (n, e) {
            var t;
            t = (function () {
                return this;
            })();
            try {
                t = t || new Function("return this")();
            } catch (r) {
                "object" === typeof window && (t = window);
            }
            n.exports = t;
        },
    },
    [[0, 0, 2, 12, 1]],
]);
