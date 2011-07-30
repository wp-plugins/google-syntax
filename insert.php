<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert code</title>
<meta name="generator" content="princehaku" />
<script src="jquery.js" language="javascript"></script>
<script src="google-code-prettify/prettify.js" language="javascript"></script>
</head>
<body>
<p>
  <label for="select">Code Type</label>
      <select name="select" id="codetype">
        <option value="java">java</option>
        <option value="c">c</option>
        <option value="cpp">cpp</option>
        <option value="php">php</option>
        <option value="bsh">bash</option>
        <option value="psl">pascal</option>
        <option value="vb">vb</option>
        <option value="js">js</option>
        <option value="sql">sql</option>
        <option value="html">html</option>
        <option value="py">python</option>
        <option value="xml">xml</option>
        <option value="sh">shell</option>
        <option value="rb">ruby</option>
      </select>
  <br />
</p>
<p>Paste Your Code Here:<br />
  <textarea cols="75" rows="15" id="codetext"></textarea>
  <br />
</p>
<div  style="text-align:center">
  <input style="width:100px;height:25px;background: url('../images/button-grad-active.png') repeat-x scroll left top #21759B;color: #EAF2FA;" type="button" value="Add It" id="codeinsert"/>
</div>
		<script type="text/javascript">
			function html_encode(str)
			{
			  var s = "";
			  if (str.length == 0) return "";
			  s = str.replace(/&/g, "&gt;");
			  s = s.replace(/</g, "&lt;");
			  s = s.replace(/>/g, "&gt;");
			  s = s.replace(/ /g, "&nbsp;");
			  s = s.replace(/\t/g, "&nbsp;&nbsp;&nbsp;&nbsp;");
			  s = s.replace(/\'/g, "&#39;");
			  s = s.replace(/\"/g, "&quot;");
			  s = s.replace(/\n/g, "<br>");
			  return s;
			}
			
			jQuery('#codeinsert').click(function(){
				type=jQuery("#codetype").val();
				text=html_encode(jQuery("#codetext").val());
				//render code
				text=(prettyPrintOne(text,type,true));
				var win = window.dialogArguments || opener || parent || top;
				//insert to mce editor
				win.send_to_editor(text);
			});
		</script>
</body>
</html>
