<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Welcome - AI Interview Analyzer</title>
</head>

<body style="
    margin: 0;
    padding: 0;
    background: #f5f8fc;
    font-family: Arial, sans-serif;
">

    <div style="
        max-width: 600px;
        margin: 40px auto;
        background: #ffffff;
        border-radius: 12px;
        padding: 35px;
        box-shadow: 0 5px 25px rgba(0,0,0,0.08);
    ">

        <div style="text-align: center;">

            <h1 style="
                margin-bottom: 10px;
                color: #172033;
            ">
                AI Interview <span style="color: #2563eb;">Analyzer</span>
            </h1>

            <p style="
                color: #64748b;
                font-size: 14px;
            ">
                Analyze • Improve • Succeed
            </p>

        </div>


        <hr style="
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 30px 0;
        ">


        <h2 style="
            color: #172033;
            font-size: 22px;
        ">
            Welcome, {{ $userName }}!
        </h2>


        <p style="
            color: #475569;
            font-size: 15px;
            line-height: 1.7;
        ">
            Your account has been successfully created.
        </p>


        <p style="
            color: #475569;
            font-size: 15px;
            line-height: 1.7;
        ">
            Thank you for joining AI Interview Analyzer.
            You can now use the platform to practice interviews
            and analyze your interview performance.
        </p>


        <div style="
            margin: 25px 0;
            padding: 18px;
            background: #eff6ff;
            border-radius: 10px;
            color: #1d4ed8;
        ">
            <strong>Account Created Successfully</strong>
            <br>
            <span style="font-size: 13px;">
                Your AI Interview Analyzer account is ready.
            </span>
        </div>


        <p style="
            color: #64748b;
            font-size: 13px;
            line-height: 1.6;
        ">
            If you did not create this account, please contact
            the system administrator.
        </p>


        <hr style="
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 30px 0;
        ">


        <p style="
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
        ">
            © {{ date('Y') }} AI Interview Analyzer
        </p>

    </div>

</body>

</html>
