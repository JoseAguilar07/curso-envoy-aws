@servers(['aws'=>'ubuntu@3.19.56.195'])

@include ('vendor/autoload.php')

@task('test')
  echo "Tarea test agregada"
@endtask
