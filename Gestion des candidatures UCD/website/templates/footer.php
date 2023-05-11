<div id="body">

  <div id="chat-circle" class="btn btn-raised">
    <div id="chat-overlay"></div>
    <i class="material-symbols-outlined">Chat</i>

  </div>

  <div class="chat-box">
    <div class="chat-box-header">
      ChatBot
      <span class="chat-box-toggle"><i class="material-symbols-outlined">close</i></span>
    </div>
    <div class="chat-box-body">
      <div class="chat-box-overlay">
      </div>
      <div class="chat-logs">

      </div>
    </div>
    <div class="chat-input">
      <form>
        <input type="text" id="chat-input" placeholder="Ecrire un message..." />
        <button type="submit" class="chat-submit" id="chat-submit"><i class="material-symbols-outlined">send</i></button>
      </form>
    </div>
  </div>




</div>


<section id="magazine" class="clearfix">

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 magzine_2">
        <div class="magzine_2_inner text-center">
          <p> All Rights Reserved <br>Université Chouaib Doukkali 2022 © </p>
        </div>
      </div>
    </div>
  </div>
</section>



<script>
  $(document).ready(function() {


    var secondaryNav = $('.cd-secondary-nav'),
      secondaryNavTopPosition = secondaryNav.offset().top;
    $(window).on('scroll', function() {
      if ($(window).scrollTop() > secondaryNavTopPosition) {
        secondaryNav.addClass('is-fixed');
      } else {
        secondaryNav.removeClass('is-fixed');
      }
    });

  });


  $(function() {
    var INDEX = 0;
    $("#chat-submit").click(function(e) {
      e.preventDefault();
      var msg = $("#chat-input").val();
      if (msg.trim() == "") {
        return false;
      }
      generate_message(msg, "self");
      var buttons = [{
          name: "Existing User",
          value: "existing"
        },
        {
          name: "New User",
          value: "new"
        }
      ];
      setTimeout(function() {
        generate_message(msg, "user");
      }, 1000);
    });

    function generate_message(msg, type) {
      INDEX++;
      var str = "";
      str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg " + type + '">';
      str += '          <span class="msg-avatar">';
      str +=
        '            <img src="../static/img/avatar.png">';
      str += "          </span>";
      str += '          <div class="cm-msg-text">';
      str += msg;
      str += "          </div>";
      str += "        </div>";
      $(".chat-logs").append(str);
      $("#cm-msg-" + INDEX)
        .hide()
        .fadeIn(300);
      if (type == "self") {
        $("#chat-input").val("");
      }
      $(".chat-logs")
        .stop()
        .animate({
          scrollTop: $(".chat-logs")[0].scrollHeight
        }, 1000);
    }

    function generate_button_message(msg, buttons) {
      /* Buttons should be object array 
        [
          {
            name: 'Existing User',
            value: 'existing'
          },
          {
            name: 'New User',
            value: 'new'
          }
        ]
      */
      INDEX++;
      var btn_obj = buttons
        .map(function(button) {
          return (
            '              <li class="button"><a href="javascript:;" class="btn btn-primary chat-btn" chat-value="' +
            button.value +
            '">' +
            button.name +
            "</a></li>"
          );
        })
        .join("");
      var str = "";
      str += "<div id='cm-msg-" + INDEX + '\' class="chat-msg user">';
      str += '          <span class="msg-avatar">';
      str +=
        '            <img src="../static/img/avatar.png">';
      str += "          </span>";
      str += '          <div class="cm-msg-text">';
      str += msg;
      str += "          </div>";
      str += '          <div class="cm-msg-button">';
      str += "            <ul>";
      str += btn_obj;
      str += "            </ul>";
      str += "          </div>";
      str += "        </div>";
      $(".chat-logs").append(str);
      $("#cm-msg-" + INDEX)
        .hide()
        .fadeIn(300);
      $(".chat-logs")
        .stop()
        .animate({
          scrollTop: $(".chat-logs")[0].scrollHeight
        }, 1000);
      $("#chat-input").attr("disabled", true);
    }

    $(document).delegate(".chat-btn", "click", function() {
      var value = $(this).attr("chat-value");
      var name = $(this).html();
      $("#chat-input").attr("disabled", false);
      generate_message(name, "self");
    });

    $("#chat-circle").click(function() {
      $("#chat-circle").toggle("scale");
      $(".chat-box").toggle("scale");
    });

    $(".chat-box-toggle").click(function() {
      $("#chat-circle").toggle("scale");
      $(".chat-box").toggle("scale");
    });
  });
</script>

</body>

</html>