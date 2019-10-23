/* 
 * Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential.
 * Written by Oga Technologies, October 1,  2016.
 */

window.setTimeout(function() {
  $(".fadeout").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
  });
}, 5000);
