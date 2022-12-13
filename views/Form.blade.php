<h1>Form</h1>
<form method="post" action="{{URL::to('/formprocess')}}" enctype="multipart/form-data">
    @csrf
    Your Name : <input type="text" name="txt1"/></br>
    File : <input type="file" name="file123"/></br>
    <input type="submit" name="action" value="Submit"/>
</form>
