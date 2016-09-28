<html>
<head>
    <title>Website Enquiry From: {{ $request->name }}</title>
</head>
<body>
    <p>From: {{ $request->name }}</p>
    <p>Contact E-mail: {{ $request->email }}</p>
    <p>Contact Number: {{ $request->number }}</p>
    <p>Message:</p>
    <p>{{ $request->message }}</p>
    <br />
    <hr/>
    <br />
    <p>
        <strong>
            Do not reply to this message directly, instead,
            <a href='mailto:{{ $request->email }}'>click here to reply to: {{ $request->email }}</a>
        </strong>
    </p>
</body>
</html>
