You have a mail from {{ $request->first_name }}  {{ $request->last_name }} and it says:
{{$request->message}}

The address to response is: {{ $request->email }}
