let animation_ripples = [];
var animation_fade;

let for_ripple = document.querySelectorAll(".for_ripple");
for_ripple.forEach(function (target) {
  target.addEventListener("mousedown", (event) => {
    let ripple_width;
    if (event.offsetX >= event.currentTarget.clientWidth - event.offsetX) {
      ripple_width = event.offsetX * 2.4;
    } else {
      ripple_width = (event.currentTarget.clientWidth - event.offsetX) * 2.4;
    }
    let current = event.currentTarget;

    if (current.tagName == "BUTTON") {
      current.classList.add("btn_active");
    }

    current.insertAdjacentHTML(
      "afterbegin",
      '<div class="ripple" style="left:' +
        event.offsetX +
        "px;top:" +
        event.offsetY +
        "px;width:" +
        ripple_width +
        "px;height:" +
        ripple_width +
        'px;"></div>'
    );

    const ripple_objects = Array.from(
      document.querySelectorAll(".for_ripple > .ripple")
    );
    ripple_objects.forEach(function (anim_target) {
      ripple_objects.shift();
      animation_ripples.push(
        anim_target.animate(
          {
            width: [0, ripple_width + "px"],
            height: [0, ripple_width + "px"],
            borderRadius: ["9999px", "9999px"],
            background: [
              'radial-gradient(circle closest-side, #588e1935 100%, transparent), url("../icons/asfalt-light.png") repeat center / 100% 100%',
              "radial-gradient(circle closest-side, #395d107e 80%, transparent)"
            ]
          },
          {
            fill: "forwards",
            duration: 250,
            easing: "cubic-bezier(0.8, 0, 0.5, 1)"
          }
        )
      );
    });
  });

  target.addEventListener("mouseenter", (event) => {
    const ripple_objects = Array.from(
      document.querySelectorAll(".for_ripple > .ripple")
    );
    ripple_objects.forEach(function (anim_target) {
      anim_target.finished.then(function () {
        anim_target.effect.target.animate(
          {
            backgroundImage: [
              'radial-gradient(circle closest-side, #ffffff35 100%, transparent), url("../icons/asfalt-light.png") repeat center / 100% 100%',
              "radial-gradient(circle closest-side, #ffffff35 80%, transparent)"
            ]
          },
          {
            fill: "forwards",
            duration: 200,
            easing: "cubic-bezier(0.8, 0, 0.5, 1)"
          }
        );
      });
    });
  });

  target.addEventListener("mouseleave", (event) => {
    const ripple_objects = Array.from(
      document.querySelectorAll(".for_ripple > .ripple")
    );
    ripple_objects.forEach(function (anim_target) {
      anim_target.finished.then(function () {
        anim_target.effect.target.animate(
          {
            backgroundImage: [
              "radial-gradient(circle closest-side, #ffffff35 80%, transparent)",
              'radial-gradient(circle closest-side, #ffffff35 100%, transparent), url("../icons/asfalt-light.png") repeat center / 100% 100%'
            ]
          },
          {
            fill: "forwards",
            duration: 200,
            easing: "cubic-bezier(0, 1, 1, 1)"
          }
        );
      });
    });
  });

  target.addEventListener("mouseup", (event) => {
    animation_ripples.forEach(function (anim_target) {
      anim_target.finished.then(function () {
        animation_fade = anim_target.effect.target.animate(
          {
            opacity: [1, 0]
          },
          {
            fill: "forwards",
            duration: 250,
            easing: "cubic-bezier(0, 1, 1, 1)"
          }
        );
        animation_fade.finished.then(function () {
          var el = anim_target.effect.target.remove();
          document.querySelector(".btn").classList.remove("btn_active");
        });
      });
    });
  });
});
