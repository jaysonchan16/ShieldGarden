</form>
<div id="footer-wrapper">
<footer id="footer" class="container">
<div id="copyright">
&copy; ltttry8899.com
</div>
</footer>
</div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	$(".addCF").click(function(){
		$("#userbet").append('<tr><td bgcolor="#dcdcdc">1</td><td bgcolor="#dcdcdc"><input class="xiazhu betNo" id="betNo" maxlength="4" size="10" type="text" id="clr" name="betNo[]"></td><td bgcolor="#dcdcdc">				<input class="xiazhu big" id="big" type="number" name="big[]" min="0"></td><td bgcolor="#dcdcdc">				<input class="xiazhu sml" id="sml" type="number" name="sml[]" min="0"></td><td bgcolor="#dcdcdc">				<input class="xiazhu sa" id="sa" type="number" name="sa[]" min="0"></td><td bgcolor="#dcdcdc">				<input class="xiazhu sb" id="sb" type="number" name="sb[]" min="0"></td><td bgcolor="#dcdcdc">				<input class="xiazhu sc" id="sc" type="number" name="sc[]" min="0">	</td><td bgcolor="#dcdcdc">				<input class="xiazhu sd" id="sd" type="number" name="sd[]" min="0"></td><td bgcolor="#dcdcdc">				<input class="xiazhu se" id="se" type="number" name="se[]" min="0"></td><td bgcolor="#dcdcdc">				<input class="xiazhu a0" id="a0" type="number" name="a0[]" min="0">	</td><td bgcolor="#dcdcdc">				<input class="xiazhu sf" id="sf" type="number" name="sf[]" min="0"></td><td bgcolor="#FFD700">				<input type="checkbox" id="mag2" class="mag2 forcheckbox mag" name="mag[]" value="1"></td>			<td bgcolor="#0000CD"><input type="checkbox" id="pmp2" class="pmp2 forcheckbox dmc" name="dmc[]" value="1"></td><td bgcolor="#DC143C"><input type="checkbox" id="tot2" class="tot2 forcheckbox tot" name="tot[]" value="1"></td><td><a href="javascript:void(0);" class="remCF">Remove</a></td></tr> &nbsp;');
	});
    $("#userbet").on('click','.remCF',function(){
        $(this).parent().parent().remove();
    });
});
</script>