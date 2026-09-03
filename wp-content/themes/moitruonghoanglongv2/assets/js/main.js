(function () {
  "use strict";

  function qs(sel, root) {
    return (root || document).querySelector(sel);
  }

  function qsa(sel, root) {
    return Array.prototype.slice.call((root || document).querySelectorAll(sel));
  }

  /* Mobile drawer */
  var openBtn = qs(".mtrl-menu-btn");
  var panel = qs("#mtrl-mobile-panel");
  var overlay = qs("#mtrl-mobile-overlay");
  var closeBtn = panel ? qs(".mtrl-menu-close", panel) : null;

  function setOpen(isOpen) {
    if (!panel || !overlay) return;
    if (isOpen) {
      panel.hidden = false;
      overlay.hidden = false;
      requestAnimationFrame(function () {
        overlay.classList.remove("opacity-0", "pointer-events-none");
        panel.classList.remove("translate-x-full");
      });
      if (openBtn) {
        openBtn.setAttribute("aria-expanded", "true");
      }
      document.documentElement.classList.add("overflow-hidden");
    } else {
      overlay.classList.add("opacity-0", "pointer-events-none");
      panel.classList.add("translate-x-full");
      if (openBtn) {
        openBtn.setAttribute("aria-expanded", "false");
      }
      document.documentElement.classList.remove("overflow-hidden");
      var done = function () {
        panel.hidden = true;
        overlay.hidden = true;
        overlay.removeEventListener("transitionend", done);
      };
      overlay.addEventListener("transitionend", done);
      setTimeout(done, 400);
    }
  }

  if (openBtn && panel && overlay) {
    openBtn.addEventListener("click", function () {
      setOpen(true);
    });
    if (closeBtn) {
      closeBtn.addEventListener("click", function () {
        setOpen(false);
      });
    }
    overlay.addEventListener("click", function () {
      setOpen(false);
    });
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape") setOpen(false);
    });
  }
})();
