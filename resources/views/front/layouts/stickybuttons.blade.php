<div class="stickybuttons">
    <a target="_blank" href="https://wa.me/{{str_replace(' ','',$info->wp)}}">
       
        <button>
            <img style="width: 45px;" src="{{asset('front/')}}/./img/wpIcon.png" alt="">
        </button>
    </a> 
    <a href="tel:+{{str_replace(' ','',$info->phone_first)}}">
        <button>
            <img src="{{asset('front/')}}/./img/phone (1).svg" alt="">
        </button>
    </a>
    <button class="click-top">
        <img src="{{asset('front/')}}/./img/arrow (1).svg" alt="">
    </button>
</div>