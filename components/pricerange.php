
<h2 class="my-3 fw-bold text-center">Check out our price plan</h2>
<p class="text-center">Try kilogrammy for Teams, the all-in-one solution for teams of all sizes to create and
    collaborate together.</p>

<br>


<div class="container">
    <div class="row justify-content-center align-items-center">


        <div style=" margin:auto; width:80%" class="my-3">
            <input type="range" class="form-range" id="customRange1" min="10000" max="1000000" step="1">
        </div>
        <div class="row">
            <span class="p-2 fw-bold shadow rounded col-2 text-center" style=" margin: auto;">
                <span id="myValue"></span>
            </span>




        </div>

        <script type="text/javascript" charset="utf-8">
            var myRange = document.querySelector('#customRange1');
            var myValue = document.querySelector('#myValue');
            var myUnits = 'Naira';
            var off = myRange.offsetWidth / (parseInt(myRange.max) - parseInt(myRange.min));
            var px = ((myRange.valueAsNumber - parseInt(myRange.min)) * off) - (myValue.offsetParent.offsetWidth / 2);

            myValue.parentElement.style.left = px + 'px';
            myValue.parentElement.style.top = myRange.offsetHeight + 'px';
            myValue.innerHTML = myRange.value + ' ' + myUnits;

            myRange.oninput = function () {
                let px = ((myRange.valueAsNumber - parseInt(myRange.min)) * off) - (myValue.offsetWidth / 2);
                myValue.innerHTML = myRange.value + ' ' + myUnits;
                myValue.parentElement.style.left = px + 'px';
            };
        </script>


        <div class="col-lg-6 p-3" style="background: url('');">


            <div style="max-width:30em " class="shadow rounded bg-white p-3 mx-2">
                <span>
                    <p>We make it posible at all mean, we are the man that can do it more than you expect, Base on your
                        plan this is what we will offer.</p>
                    <ul>
                        <p class="text-center">#280000 plan</p>
                        <li style="margin: 0in;">24/7/365 expert support.</li>
                        <li>100 keywords ranking.</li>
                        <li>Free blog 30 blog post.</li>
                        <li>Feb restrcture and redesign.</li>
                    </ul>
                    <div class="btn fw-bold text-white my-2 p-2 col-5" style="background:  var(--purple) !important;">
                        Contact us for deal
                    </div>
                </span>
            </div>
        </div>

