<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <td>username</td>
          <td>age</td>
          <td>height</td>
          <td>hobbies</td>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{{ $user->username }}</td>
              <td>{{ $user->age }}</td>
              <td>{{ $user->height }}</td>
              <td>
                @foreach ($user->hobbies as $hobby)
                  {{ $hobby->content }}
                @endforeach
              </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </body>
</html>
