<link rel="stylesheet" href="radiocss.css">
<div class="wrapper">
  <input type="radio" name="radio" id="option-1" value="1" onchange="loadrec()" >
  <input type="radio" name="radio" id="option-2" value="2" onchange="loadrec()">
  <input type="radio" name="radio" id="option-3" value="3" onchange="loadrec()">
  <input type="radio" name="radio" id="option-4" value="4" checked>
  <label for="option-1" class="option option-1">
	<div class="dot"></div>
	<span>1st</span>
  </label>
  <label for="option-2" class="option option-2">
	<div class="dot"></div>
	<span>2nd</span>
  </label>
  <label for="option-3" class="option option-3">
	<div class="dot"></div>
	<span>3rd</span>
  </label>
  <label for="option-4" class="option option-4">
	<div class="dot"></div>
	<span>NA</span>
  </label>
</div>
<script>
function loadrec()
{
alert($('input:radio[name=radio]:checked').val());
}
</script>