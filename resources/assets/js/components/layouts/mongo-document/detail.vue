<template>
  <div id="main-column" class="main-column">
    <span id="showNav" class="showNav">Navigation</span>
    <div class="document">
      <div class="documentwrapper">
        <div class="bodywrapper">
          <div class="body">
            <a class="edit-link" href="https://github.com/mongodb/docs/blob/v3.6/source/tutorial/install-mongodb-on-red-hat.txt" target="_blank" title="Edit tutorial/install-mongodb-on-red-hat.txt on GitHub">
              <span class="icon-edit"></span>
            </a>

            <div class="bc"> <!-- order link-->
              <ul>
                <li><a href="../../installation/">Install MongoDB</a><span class="bcpoint"> &gt; </span></li>
                <li><a href="../../administration/install-on-linux/">Install MongoDB Community Edition on Linux</a>
                  <span class="bcpoint"> &gt; </span>
                </li>
                <li>Install MongoDB Community Edition on Red Hat Enterprise or CentOS Linux</li>
              </ul>
            </div><!-- End bc -->
            <div class="section" id="install-mongodb-community-edition-on-red-hat-enterprise-or-centos-linux">
              <h1>Install MongoDB Community Edition on Red Hat Enterprise or CentOS Linux</h1>
              
              <div class="contents twocols local topic" id="on-this-page">
                <p class="topic-title first">On this page</p>
                <ul class="simple">
                  <li><a class="reference internal" href="#overview" id="id5">Overview</a></li>
                  <li><a class="reference internal" href="#packages" id="id6">Packages</a></li>
                  <li><a class="reference internal" href="#install-mongodb-community-edition" id="id7">Install MongoDB Community Edition</a></li>
                </ul>
              </div>

              <div class="contents twocols local topic" id="on-this-page">
                <p class="topic-title first">On this page</p>
                <ul class="simple">
                  <li><a class="reference internal" href="#terminology-and-concepts" id="id1">Terminology and Concepts</a></li>
                  <li><a class="reference internal" href="#executables" id="id2">Executables</a></li>
                  <li><a class="reference internal" href="#examples" id="id3">Examples</a></li>
                  <li><a class="reference internal" href="#additional-resources" id="id4">Additional Resources</a></li>
                </ul>
              </div>
              <div class="contents singlecol local topic" id="on-this-page">
                <p class="topic-title first">On this page</p>
                <ul class="simple">
                  <li><a class="reference internal" href="#terminology-and-concepts" id="id1">Terminology and Concepts</a></li>
                  <li><a class="reference internal" href="#executables" id="id2">Executables</a></li>
                  <li><a class="reference internal" href="#examples" id="id3">Examples</a></li>
                  <li><a class="reference internal" href="#additional-resources" id="id4">Additional Resources</a></li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script type="text/javascript">
        var d = Object.freeze({
        setup: function(t) {
            if (void 0 === window.history || void 0 === document.querySelectorAll || void 0 === document.body.classList || void 0 === (new XMLHttpRequest).responseURL) return !1;
            var e = document.querySelector(".sphinxsidebarwrapper"),
                n = document.querySelector(".body"),
                i = {};

            function r() {
                void 0 !== i.timeoutID && window.clearTimeout(i.timeoutID), void 0 !== i.xhr && i.xhr.abort(), i = {}
            }

            function s(o, a) {
                void 0 === o && console.error("Going to undefined path"), r(), n.classList.add("loading"), i.timeoutID = window.setTimeout(function() {
                    n.classList.remove("loading"), i.timeoutID = -1
                }, 1e4);
                var s = new Date;
                i.xhr = function(t, e) {
                    var n = new XMLHttpRequest;
                    n.onload = function() {
                        n.status >= 200 && n.status < 400 ? (e.success(n.responseText, n.responseURL), e.complete()) : (e.error(), e.complete())
                    }, n.onerror = function() {
                        e.error(), e.complete()
                    }, n.open("GET", t, !0);
                    try {
                        n.send()
                    } catch (t) {
                        e.error(), e.complete()
                    }
                }(o, {
                    complete: function() {
                        r()
                    },
                    error: function(t) {
                        console.error("Failed to load " + o), window.location = o
                    },
                    success: function(o, i) {
                        var r = new Date - s;
                        n.classList.remove("loading"), a && window.history.pushState({
                            href: i
                        }, "", i);
                        var c = document.createElement("html");
                        c.innerHTML = o;
                        var l = c.querySelector("title").textContent,
                            u = c.querySelector(".body"),
                            d = c.querySelector(".sphinxsidebarwrapper");
                        r > 62.5 && u.classList.add("loading"), n.parentElement.replaceChild(u, n), n = u, e.parentElement.replaceChild(d, e), e = d, document.title = l, t.update(), window.history.onnavigate && window.history.onnavigate(), window.setTimeout(function() {
                            n.classList.remove("loading"), a && window.scroll(0, 0)
                        }, 1)
                    }
                })
            }
            window.history.replaceState({
                href: window.location.href
            }, document.querySelector("title").textContent, window.location.href);
            var c = document.querySelectorAll(".sphinxsidebarwrapper > ul a.reference.internal");

            function l(t) {
                0 !== t.button || t.shiftKey || t.altKey || t.metaKey || t.ctrlKey || (t.preventDefault(), s(t.currentTarget.href, !0))
            }
            for (var u = 0; u < c.length; u += 1) {
                var d = c[u];
                (o($(d)) || a($(d))) && d.addEventListener("click", l)
            }
            return window.onpopstate = function(t) {
                null !== t.state && s(t.state.href, !1)
            }, !0
        }
    });
</script>