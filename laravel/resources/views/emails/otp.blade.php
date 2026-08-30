
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>OTP Verification</title>

</head>

<body style="
    margin: 0;
    padding: 0;
    background-color: #f4f7fb;
    font-family: Arial, Helvetica, sans-serif;
">

    <div style="
        max-width: 600px;
        margin: 40px auto;
        background-color: #ffffff;
        border-radius: 12px;
        padding: 35px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
    ">

        <!-- PROJECT NAME -->

        <div style="
            text-align: center;
            margin-bottom: 25px;
        ">

            <h1 style="
                margin: 0;
                color: #172033;
                font-size: 28px;
            ">
                AI Interview
                <span style="color: #2563eb;">
                    Analyzer
                </span>
            </h1>

            <p style="
                margin-top: 8px;
                color: #64748b;
                font-size: 14px;
            ">
                Analyze • Improve • Succeed
            </p>

        </div>


        <hr style="
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 25px 0;
        ">


        <!-- GREETING -->

        <h2 style="
            color: #172033;
            margin-bottom: 10px;
        ">
            Hello, {{ $userName }}!
        </h2>


        @if ($purpose === 'signup')

            <p style="
                color: #475569;
                font-size: 15px;
                line-height: 1.7;
            ">
                Thank you for creating an account with
                <strong>AI Interview Analyzer</strong>.
            </p>

            <p style="
                color: #475569;
                font-size: 15px;
                line-height: 1.7;
            ">
                Please use the OTP below to verify your email
                address and complete your registration.
            </p>

        @else

            <p style="
                color: #475569;
                font-size: 15px;
                line-height: 1.7;
            ">
                A login attempt was made on your
                <strong>AI Interview Analyzer</strong> account.
            </p>

            <p style="
                color: #475569;
                font-size: 15px;
                line-height: 1.7;
            ">
                Enter the OTP below to complete your login.
            </p>

        @endif


        <!-- OTP BOX -->

        <div style="
            margin: 30px 0;
            padding: 25px;
            background-color: #eff6ff;
            border-radius: 12px;
            text-align: center;
        ">

            <p style="
                margin: 0 0 12px;
                color: #64748b;
                font-size: 13px;
            ">
                Your One-Time Password
            </p>

            <div style="
                font-size: 32px;
                font-weight: bold;
                letter-spacing: 8px;
                color: #2563eb;
            ">
                {{ $otp }}
            </div>

        </div>


        <!-- INFORMATION -->

        <p style="
            color: #64748b;
            font-size: 13px;
            line-height: 1.6;
        ">
            This OTP is valid for
            <strong>10 minutes</strong>.
        </p>

        <p style="
            color: #64748b;
            font-size: 13px;
            line-height: 1.6;
        ">
            For your security, never share this OTP with anyone.
        </p>


        <hr style="
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 30px 0;
        ">


        <!-- FOOTER -->

        <p style="
            text-align: center;
            color: #94a3b8;
            font-size: 12px;
            margin: 0;
        ">
            © {{ date('Y') }} AI Interview Analyzer
        </p>

        <p style="
            text-align: center;
            color: #94a3b8;
            font-size: 11px;
            margin-top: 8px;
        ">
            This is an automated email. Please do not reply.
        </p>

    </div>

</body>

</html>