<style>

    iframe
    {

    border:none;
    width:1200px;
    height: 1200px;
    display:block;

    }

</style>


<table class="table table-light">
    <tbody>
        <tr>
            <td><iframe src="{{asset('storage/'.$file->attachment)}}"></iframe></td>
        </tr>
    </tbody>
</table>