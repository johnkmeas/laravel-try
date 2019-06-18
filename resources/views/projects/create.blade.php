<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Create Projects</title>
</head>
<body>
  <h1>Create Page</h1>
  <form method="POST" action="/projects">
    {{ csrf_field() }}
    <div>
      <input type="text" name="title" placeholder="Project title">
    </div>
    <div>
      <textarea name="description" placeholder="description" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
      <button type="submit">Create Project</button>
    </div>
  </form>
</body>
</html>