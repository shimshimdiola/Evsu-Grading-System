<input type="checkbox" id="present"> Select All<br><input type="checkbox" id="absent"> Select All<br>

<form>
    <input type="radio" name="present" value="option1"> present<br>
    <input type="radio" name="absent" value="option2"> Option 2<br>
</form>

<form>
    <input type="radio" name="present" value="option1"> present<br>
    <input type="radio" name="absent" value="option2"> Option 2<br>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#present').click(function() {
        $('input[type="radio"][name="present"]').prop('checked',
            this.checked);
    });
    $('#absent').click(function() {
        $('input[type="radio"][name="absent"]').prop('checked',
            this.checked);
    });
});
</script>