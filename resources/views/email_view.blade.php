<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  </head>
  <body>
    <div style="margin: auto; background-color: #eee; padding: 20px; width: 500px; border-radius: 5px; font-family: Ubuntu, sans-serif;">
      <p style="font-weight: bold">Name: {{ $data['name'] }}</p>
      <p style="font-weight: bold">Email: {{ $data['email'] }}</p>
      <p style="font-weight: bold">Subject: {{ $data['subject'] }}</p>
      <p style="font-weight: bold">Message: {{ $data['message'] }}</p>
    </div>
		
  </body>
</html>