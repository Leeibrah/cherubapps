<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style>
    body { font-family: Arial, sans-serif; color: #111; margin: 0; padding: 0; background: #f4f4f4; }
    .wrap { max-width: 600px; margin: 32px auto; background: #fff; border-radius: 8px; overflow: hidden; }
    .header { background: #924228; padding: 28px 32px; }
    .header h1 { color: #fff; font-size: 18px; margin: 0; }
    .header p { color: rgba(255,255,255,0.75); font-size: 13px; margin: 6px 0 0; }
    .body { padding: 32px; }
    .field { margin-bottom: 20px; }
    .label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: #888; margin-bottom: 4px; }
    .value { font-size: 15px; color: #111; }
    .message-box { background: #fdf1e9; border-left: 4px solid #fe7c02; padding: 16px 20px; border-radius: 4px; font-size: 15px; line-height: 1.7; color: #333; }
    .footer { background: #f9f9f9; border-top: 1px solid #eee; padding: 20px 32px; font-size: 12px; color: #999; }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="header">
      <h1>New Enquiry from Website</h1>
      <p>Submitted via cherubapps.africa contact form</p>
    </div>
    <div class="body">
      <div class="field">
        <div class="label">Name</div>
        <div class="value">{{ $data['name'] }}</div>
      </div>
      <div class="field">
        <div class="label">Email</div>
        <div class="value"><a href="mailto:{{ $data['email'] }}" style="color:#fe7c02;">{{ $data['email'] }}</a></div>
      </div>
      @if(!empty($data['phone']))
      <div class="field">
        <div class="label">Phone</div>
        <div class="value">{{ $data['phone'] }}</div>
      </div>
      @endif
      @if(!empty($data['company']))
      <div class="field">
        <div class="label">Organization</div>
        <div class="value">{{ $data['company'] }}</div>
      </div>
      @endif
      @if(!empty($data['service']))
      <div class="field">
        <div class="label">Area of Interest</div>
        <div class="value">{{ $data['service'] }}</div>
      </div>
      @endif
      <div class="field">
        <div class="label">Message</div>
        <div class="message-box">{{ $data['message'] }}</div>
      </div>
    </div>
    <div class="footer">
      Reply directly to this email to respond to {{ $data['name'] }}.
    </div>
  </div>
</body>
</html>
