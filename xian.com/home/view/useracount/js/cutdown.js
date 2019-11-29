$(function(){
  var timers=$(".timer-simple-seconds");
  for(var i=0;i<timers.length;i++){
      var timer=$(timers[i]);
      
      if(timer.attr("timestamp")){
          timestamp2Timer(timer);
      }else if(timer.attr("datetime")){
          datetime2Timer(timer);
      }
      processTimer(timer);
      setInterval(processTimer,1000,timer);
  }

  function timestamp2Timer(timer){
      var total=parseInt(timer.attr("timestamp"));
      total=Math.round(total/1000);
      var now=new Date().getTime()/1000;
      timer.attr("timer",total-now);
  }
  
  function datetime2Timer(timer){
      var timestamp=new Date(timer.attr("datetime")).getTime();
      timer.attr("timestamp",timestamp);
      timestamp2Timer(timer);
  }
  

  function processTimer(timer){
      var timerCut = document.getElementById('timerCut')
      var total=parseInt(timerCut.getAttribute('timer'));
      var t=total;
      if(total<0) return;
      var day=$("#timerCut > .day");
      var hour=$("#timerCut > .hour");
      var minute=$("#timerCut > .minute");
      var second=$("#timerCut > .second");
      if(day.length){
          var d=Math.floor(t/(60*60*24));
          day.text(d);
          t-=d*(60*60*24);
      }
      if(hour.length){
          var h=Math.floor(t/(60*60));
          hour.text((h<10?"0":"")+h);
          t-=h*(60*60);
      }
      if(minute.length){
          var m=Math.floor(t/60);
          minute.text((m<10?"0":"")+m);
          t-=m*60;
      }
      if(second.length){
          second.text((t<10?"0":"")+t);
      }
      
      
      total-=1;
      timerCut.setAttribute("timer",total);
  }
});