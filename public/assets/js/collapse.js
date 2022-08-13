$(function() {

    //button 1
    var b1 = $("#bt");
    var w1 = $("#wrapper");

    //button 2
    var b2 = $("#bt2");
    var w2 = $("#wrapper2");

    var l = $("#list");

    //button 3
    var b3 = $("#bt3");
    var w3 = $("#wrapper3");

    //button 4
    var b4 = $("#bt4");
    var w4 = $("#wrapper4");

    //button 5
    var b5 = $("#bt5");
    var w5 = $("#wrapper5");

    var b6 = $("#bt6");
    var w6 = $("#wrapper6");

    b1.click(function() {

      w1.toggleClass('open'); /* <-- toggle the application of the open class on click */

    });
    b2.click(function() {
        w2.toggleClass('open'); /* <-- toggle the application of the open class on click */
      });
      b3.click(function() {
        w3.toggleClass('open'); /* <-- toggle the application of the open class on click */
      });
      b4.click(function() {
        w4.toggleClass('open'); /* <-- toggle the application of the open class on click */
      });
      b5.click(function() {
        w5.toggleClass('open'); /* <-- toggle the application of the open class on click */
      });
      b6.click(function() {
        w6.toggleClass('open'); /* <-- toggle the application of the open class on click */
      });

  });
