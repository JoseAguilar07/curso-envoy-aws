@servers(['aws'=>'ubuntu@3.19.56.195'])

@include ('vendor/autoload.php')
@setup
  if (!isset($on)){
    throw new Exception ('La variable --on no esta definida');
  }
  $branch = isset($branch) ? $branch:'master';
  $origin = 'git@github.com:JoseAguilar07/curso-envoy.aws';
  $app_dir = '/var/www/html/cuso-envoy-aws';
@endsetup

@task('test')
  echo {{$branch}}
@endtask

@task('ls'['on'=> $on])
  cd {{$app_dir}}
  ls -la
@endtask

@task('git:clone', ['on' => $on])
  cd {{$app_dir}}
  echo "hemos entrado al directorio /var/www/html";
  git clone {{$origin}}
  echo "repositorio clonado correctamente";
@endtask
