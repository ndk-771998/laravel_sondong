<div class="flash-sale-container container" id="flash-sale">
    <div class="flash-sale-wrap">
        <div class="flash-sale-title d-flex flex-row">
            <div class="logo">
                <img src="/assets/images/logo/flash-sale.svg" alt="Flash sale">
            </div>
            <div class="title">
                Flash sale
            </div>
            <div class="count-down d-flex flex-row">
                <div id="hours"></div>
                <div id="minutes"></div>
                <div id="seconds"></div>
            </div>
            <div class="view-all ml-auto d-flex align-items-center">
                <a href="/flash-sale">Xem tất cả <img src="/assets/images/logo/chevron-up.svg" alt="up"></a>
            </div>
        </div>
        <div class="flash-sale">
        
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
            @include('include.flash-sale.flash-sale-item')
        
        </div>
    </div>
</div>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("10-31-2021").getTime();
    
    // Update the count down every 1 second
    var x = setInterval(function() {
    
      // Get today's date and time
      var now = new Date().getTime();
        
      // Find the distance between now and the count down date
      var distance = countDownDate - now;
        
      // Time calculations for days, hours, minutes and seconds
      var hours = (Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60) + distance / (1000 * 60 * 60))).toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping:false});
      var minutes = (Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping:false});
      var seconds = (Math.floor((distance % (1000 * 60)) / 1000)).toLocaleString('en-US', {minimumIntegerDigits: 2, useGrouping:false});
        
      // Output the result in an element with id="demo"
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;
        
      // If the count down is over, write some text 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("flash-sale").style.display = "none";
      }
    }, 1000);
</script>