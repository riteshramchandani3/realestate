
function getNewMessages() {
    //var i = $('.senn').html();
    // i++;
    $.ajax({
        url: 'get_unread_msgs.php',
        success: function (data) {
            // do something with the return value here if you like
            //alert(data);

            $('#senn').html(data);
            //alert(data);
            var dlst = data.split("|");

            if (dlst[0].trim() !== '')
            {
                $('.notificationenvelop').css('color', '#60d7f5');
                $('.notificationenvelop').html(' ' + dlst[1]);


            }
        }
    });

}