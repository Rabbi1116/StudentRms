<table class="table table-striped">

    <thead>
        <tr>
            <th>Subject Name</th>
            <th>Marks</th>
        </tr>
    </thead>

    <tbody>

        @foreach($subject_id as $subject)

        <tr>
        <input type="hidden" name="student_id" value="{{$subject->student_id}}">
            <td>{{$subject->title}} <input type="hidden" name="subjeci_id[]" value="{{$subject->subject_id}}"></td>
            <td><input type="text" name="marks[]" > </td>
        </tr>

        @endforeach

    </tbody>
</table>