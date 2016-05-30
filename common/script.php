<!-- Bootstrap Prequsites -->
<script src="lib/bower_components/jquery/dist/jquery.min.js"></script>
<script src="lib/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="lib/bower_components/bootstrap/dist/js/jquery-ui.min.js"></script>
<script src="lib/bower_components/jquery/dist/jquery.ui.autocomplete.html.js"></script>

<!-- <script language="JavaScript" type="text/javascript">
    $(document).ready(function($) {
        $('#searching').autocomplete({
            source: 'functions/suggest_usulan.php',
            minLength: 2,
            focus: function(event, ui) {
                $('#searching').val(ui.item.label);
                return false;
            },
            select: function(event, ui) {
                var code = ui.item.id;
                if (code != '') {
                    location.href = 'browse.php?usulancode=' + code;
                }
            },
            // optional
            html: true,
            // optional (if other layers overlap the autocomplete list)
            open: function(event, ui) {
                $(".ui-autocomplete").css("z-index", 1000);
            }
        });

        $('#searching').data("ui-autocomplete")._renderItem = function(ul, item) {

            var $li = $('<li>'),
                $img = $('<img>');


            $img.attr({
                src: 'images/' + item.icon,
                alt: item.label
            });

            $li.attr('data-value', item.label);
            $li.append('<a>');
            $li.find('a').append($img).append(item.label);

            return $li.appendTo(ul);
        };
    });
</script> -->
