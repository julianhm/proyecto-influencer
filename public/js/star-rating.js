function onload(event) {
   
   var myDataService =  {
     rate:function(rating) {
        return {then:function (callback) {
          setTimeout(function () {
            callback((Math.random() * 5)); 
          }, 1000); 
        }
      }
    }
  }


  var starRating1 = raterJs( {
    // shows a rating tooltip
    showToolTip: true,
    // the number of stars
    max: 5,
     // Text to show when hover over stars.
    ratingText: '{rating}/{maxRating}',
    starSize:32, 
    step:0.5,  
    element:document.querySelector("#rater"), 
    rateCallback:function rateCallback(rating, done) {
      this.setRating(rating); 
      done(); 
    }
  }); 


 

}

window.addEventListener("load", onload, false); 

