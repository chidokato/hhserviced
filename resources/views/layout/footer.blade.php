
<!------------------- FOOTER ------------------->
<footer>
    <div id="particles-js"></div>
    <div class="count-particles">
      <span class="js-count-particles">--</span> particles
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>{{__('lang.hnh-9')}}</h2>
                <p>{{__('lang.hnh-10')}}</p>
                <p>{{__('lang.hnh-11')}}</p>
            </div>
            <div class="col-md-3">
                
            </div>
            <div class="col-md-5">
                <h2>{{__('lang.hnh-13')}}</h2>
                <ul class="address">
                    <li><i class="icon-location"></i> {{__('lang.hnh-14')}}</li>
                    <li><i class="icon-phone-filled"></i> +(84) 916 442 096</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="bottom">
            <h3>{{__('lang.hnh-12')}}</h3>
            <div class="ft-social">
                <ul class="social">
                    <li><a href="" class=""><i class="icon-facebook"></i></a></li>
                    <li><a href="" class=""><i class="icon-youtube"></i></a></li>
                    <li><a href="" class=""><i class="icon-zalo"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

<!------------------- END: FOOTER ------------------->



</footer>
<style type="text/css">



/* ---- particles.js container ---- */

#particles-js {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  /*background-color: #b61924;
  background-image: url("");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;*/
}

/* ---- stats.js ---- */

.count-particles{
  background: #000022;
  position: absolute;
  top: 48px;
  left: 0;
  width: 80px;
  color: #13E8E9;
  font-size: .8em;
  text-align: left;
  text-indent: 4px;
  line-height: 14px;
  padding-bottom: 2px;
  font-family: Helvetica, Arial, sans-serif;
  font-weight: bold;
}

.js-count-particles{
  font-size: 1.1em;
}

#stats,
.count-particles{
  -webkit-user-select: none;
}

#stats{
  border-radius: 3px 3px 0 0;
  overflow: hidden;
}

.count-particles{
  border-radius: 0 0 3px 3px;
}
</style>

<script type="text/javascript" src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script type="text/javascript" src="https://threejs.org/examples/js/libs/stats.min.js"></script>

<script type="text/javascript">
    /* ---- particles.js config ---- */

particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 380,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 140,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});


/* ---- stats.js config ---- */

var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function() {
  stats.begin();
  stats.end();
  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
  }
  requestAnimationFrame(update);
};
requestAnimationFrame(update);
</script>