<html>
<head>
<style>
    * {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</
.comment-form-container {
    margin-top: 562px;
}
body {
	font-family: Arial;
	width: 600px;
}

.comment-form-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 4px;
}

.input-row {
	margin-bottom: 20px;
}

.input-field {
	width: 100%;
	border-radius: 4px;
	padding: 10px;
	border: #e0dfdf 1px solid;
}

.btn-submit {
	padding: 10px 20px;
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 100px;
	border-radius: 4px;
	cursor: pointer;
}

ul {
	list-style-type: none;
}

.comment-row {
	border-bottom: #e0dfdf 1px solid;
	margin-bottom: 15px;
	padding: 15px;
}

.outer-comment {
	background: #F0F0F0;
	padding: 20px;
	border: #dedddd 1px solid;
	border-radius: 4px;
}
body {
    margin-left: 376px;
}

span.comment-row-label {
	color: #484848;
}

span.posted-by {
	font-weight: bold;
}

.comment-info {
	font-size: 0.9em;
	padding: 0 0 10px 0;
}

.comment-text {
	margin: 10px 0px 30px 0;
}

.btn-reply {
	color: #2f20d1;
	cursor: pointer;
	text-decoration: none;
}

.btn-reply:hover {
	text-decoration: underline;
}

#comment-message {
	margin-left: 20px;
	color: #005e00;
	display: none;
}

.label {
	padding: 0 0 4px 0;
}
.comment-form-container {
    margin-top: 134px;
}
</style>

<script src="jquery-3.2.1.min.js"></script>


<body>
<div>
<div class="row"> 
  <div class="leftcolumn">
    <div class="card">
     
      <h5>Title description, Dec 7, 2017</h5>
      <div  style="height:500px;"><img src="blog4.jpg" alt=""></div>
      <h2>Blog1</h2>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <br><br><br>
    <div class="card">
      
      <h5>Title description, Sep 2, 2017</h5>
      <div  style="height:500px;width:500px;"><img src="blog1.jpg" alt=""></div>
      <h2>Blog2</h2>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <br><br><br>
    <div class="card">
     
      <h5>Title description, Sep 2, 2017</h5>
      <div  style="height:500px;"><img src="blog3.jpg" alt=""></div>
      <h2>Blog3</h2>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
    <br><br><br>
    <div class="card">
     
     <h5>Title description, Sep 2, 2017</h5>
     <div style="height:500px;"><img src="blog4.jpg" alt=""></div>
     <h2>Blog4</h2>
     <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
   </div>
  </div>
  <br><br><br>
</div>
</div>



	<div class="comment-form-container">
		<form id="frm-comment">
			<div class="input-row">
				<div class="label">Name:</div>
				<input type="hidden" name="comment_id" id="commentId" /> <input
					class="input-field" type="text" name="name" id="name"
					placeholder="Enter your name" />
			</div>
			<div class="input-row">
				<textarea class="input-field" name="comment" id="comment"
					placeholder="Your comment here"></textarea>
			</div>
			<div>
				<input type="button" class="btn-submit" id="submitButton"
					value="Publish" />
				<div id="comment-message">Comment added successfully.</div>
			</div>
		</form>
	</div>
	<div id="output"></div>
	<script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
            	   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                        	$("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                     	   listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
            	   listComment();
            });

            function listComment() {
                $.post("comment-list.php",
                        function (data) {
                           var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'>"+
                                    "<div class='comment-info'><span class='comment-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='comment-row-label'>at</span> <span class='posted-at'>" + data[i]['comment_at'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='comment-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='comment-row-label'>at</span> <span class='posted-at'>" + data[i]['comment_at'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>
</body>

</html>