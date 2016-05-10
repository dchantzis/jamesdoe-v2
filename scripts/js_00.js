function newImage(arg) 
{
	if (document.images) {
		rslt = new Image();
		rslt.src = arg;
		return rslt;
	}
}

function changeImages() 
{
	if (document.images && (preloadFlag == true)) {
		for (var i=0; i<changeImages.arguments.length; i+=2) {
			document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
		}
	}
}

var preloadFlag = false;
function preloadImages() 
{
	if (document.images) {
		butt_01_over = newImage("images/layout/navi/butt_01_over.gif");
		butt_02_over = newImage("images/layout/navi/butt_02_over.gif");
		butt_03_over = newImage("images/layout/navi/butt_03_over.gif");
		butt_04_over = newImage("images/layout/navi/butt_04_over.gif");
		butt_05_over = newImage("images/layout/navi/butt_05_over.gif");
		butt_06_over = newImage("images/layout/navi/butt_06_over.gif");
		
		butt_07_over = newImage("images/layout/timeline/butt_07_over.gif");
		butt_08_over = newImage("images/layout/timeline/butt_08_over.gif");
		butt_09_over = newImage("images/layout/timeline/butt_09_over.gif");
		butt_10_over = newImage("images/layout/timeline/butt_10_over.gif");
		butt_11_over = newImage("images/layout/timeline/butt_11_over.gif");
		butt_12_over = newImage("images/layout/timeline/butt_12_over.gif");
		preloadFlag = true;
	}
}

function load_comments(button)
{
	window.open( button.name ,"_blank","fullscreen=no, width=430, height=330,status=no,toolbar=no,menubar=no,resizable=no,scrollbars=yes");
}
function load_image_fullsize(button)
{
	window.open( button.name ,"_blank","fullscreen=no, width=600, height=450,status=no,toolbar=no,menubar=no,resizable=yes,scrollbars=yes");
}
function admin()
{
	window.open("./mmlogin.php","_blank","fullscreen=no, width=450, height=330, status=no, toolbar=no,menubar=no,resizable=no,scrollbars=yes");
}
function closewindow(){
	window.close ();
}

function maxlength(max)
{
   if (document.form01.comment.value.length >= max) {
      document.form01.comment.value = document.form01.comment.value.substring(0,max);
      alert   (max+" characters length exceeded.");
      return false;
   }
}

function maxlength_bnotes(max)
{
   if (document.ilf.bnotes.value.length >= max) {
      document.ilf.bnotes.value = document.ilf.bnotes.value.substring(0,max);
      alert   (max+" characters length exceeded.");
      return false;
   }
}

function maxlength_icomments(max)
{
   if (document.ilf.icomments.value.length >= max) {
      document.ilf.icomments.value = document.ilf.icomments.value.substring(0,max);
      alert   (max+" characters length exceeded.");
      return false;
   }
}

function email_check()
{
	var regexp = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/
	var matches = regexp.exec(document.form01.email.value)
	if (!matches) {
			document.form01.email.value=""
			alert("this in not a valid email address!")
			document.refresh
		} 
}

function number_check1()
{
	var regexp = /[^ 0-9]/
	var matches = regexp.exec(document.itf.tid.value)
	if (matches) {
			document.itf.tid.value=""
			alert("type only numbers please!")
			document.refresh
		} 
}
function number_check2()
{
	var regexp = /[^ 0-9]/
	var matches = regexp.exec(document.ilf.iyear.value)
	if (matches) {
			document.ilf.iyear.value=""
			alert("type only numbers please!")
			document.refresh
		} 
}

function HandleError(paramImg)
{
	paramImg.src="./images/layout/other/missing.gif"
}
