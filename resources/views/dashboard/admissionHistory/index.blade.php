@extends('dashboard.master')
@section('titulo','HISTORIAS CLINICAS')
@include('layouts/navigation')
@section('contenido')
<br>
<br>


    
      

      <div class="container overflow-hidden text-center">
        <div class="row gx-5">
          <div class="col">
            <center>
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACdElEQVR4nO2dsW4TURBFp/Ev4AZqFIydhBI+AYQvf5I2CRIpESBRUCKlBxnxLQQnSmjj3QoQoYNmIlNZlhYlZvGdfXOPdH/gnp15b7XFmgkhhBBCCCGEEGJFxjO/hconqPwnavcIGb04PUxT/rj2b+zCsZSNp0e+sX/03Ernz5MfoHAs5c5cQAYJkdYOFgXsf84hgV00GjKYC8ggIbKAQQYJ0QUMSpfALhoNubsgoGgJcQVMc0iILWBavgR20WjIcG+aQ0JkAcMMEqILGJYugV00GjLaO84hIbKAUQYJ0QWMSpfALhoN2VwQULSEsAJ2j3NIYBeNhmw/O21JwqcDiwy7aDTk/ttz39w9KV8Cu2g05OHJL793cFa+BHbR+EseffntDw5nvtXSOtp6fRbvQz+7ZKw5Fg12IZAAfinQBPCLgVZQjlg02IVAAvilQBPALwZaQTli0WAXAgnglwJNAL8YaAVdrYQbLyfe23kTIv1Xk3xnALv03lIkYEcC1joB87HvhVlBH/JNQNdj0WAXAgnglwJNAL8YaAXFfw/or3DvL+4MYN98IAESkPY9oL/Cvb+4FdT1WDTYhUAC+KVAE8AvBlpBVytB3wNapmvvAb1/fC+waEhAxwToe0DLsA9F6BDmlwLdgvLEosEuBBJwvRL0PaBlrvsEdu3ej9JWkASQBeh7QMuwD0XoEOaXgjXGosEuBBLALwWaAH4x0ArKEYsGuxBIAL8UaAL4xUArKEcsGlF/4oP/kHHlPywaqP1jIgHvLBqPZ34btX8vvvzavz4595sW9m96lb9H5RfsotB2Kr+YP/lhyxdCCCGEEEIIIawLXAKNoeAbJ3moGwAAAABJRU5ErkJggg==">
           </center>
           <div class="p-3">HISTORIA CLINICA DE INGRESO <br><br><a href="{{url('dashboard/admissionHistory/create')}}" class="btn btn-primary">CREAR</a></div>
          </div>
          <div class="col">
            <center>
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAACw0lEQVR4nO2dUWvUQBSF5zc0ye4mbTejW/H3CSKCiAgiQhFBRBShIqhQLfoovgu+9q3/IGDWihbc41uk4oO2GbrdbXpv5p4PzvNuv9OZyc08rHOEEEIIIYQQQghZkFkxWUfhd2ZFeYDCNxryZDj5ZEd+7velheNIrgwu2Sjh8D9fWjZacnWwYaMETdsO/sm1bGKjBGnRCOR6dvG/Ep6NJp9djEiLRiA3sgs2SpAWjUBuZkZKkBaNQG5lpY0SpEUjkNvp2EYJ0qIRyJ103UYJ0qIRyN10zUYJ0qIRyL101UYJ0qIRyGZa2ChBWjQCuZ/kNkqYV0j9+l1T7e51kumrnWOf9yAZ2Shh3gK6kl/9zdHPe5gMbZSgtYBHycBGCVoLeJxkNkrQWsDWSnYmJWxpf5WttYAP6bB5upLGX4LWAr7k4+ZFksZfwrwFHD4qdiW/fvm29TP383HzMRs1z2PejpYZltDDOG1ICwELkJcCrgB5MeAWZCNOG9JCwALkpYArQF4MuAXZiNOGtBCwAHkp4AqQFwNuQfPfCU9b7nC7vDM+KW3fJ7oz4KTXx5WQ/ND3YQG7LKCz+4C65f19l/cFi94nRLUFxRKnDWkhYAHyUsAVIC8G3IL6MwdMT/HcH80ZoG0OAAvwLMDqHFCf4rk/mi0oljhtSAsBC5CXAq4AeTHgFtSfOaBaYi5w2ujrHFAtOBc4bbCAnhSgaQ6olpgLnDakD0XwEJaXgnOM04a0ELAAeSngCujXHDDlfcDesQK0PvdHcwZoG8RgrQBNc0DN+wAvfpiaWwGxxGlDWghYgLwUcAXIiwG3IBtx2pAWAhYgLwVcAfJiwC3IRpw2tP6IDzrILC+/O22g8O+lxeC8kpfbThu/Cn8Zuf8Wv3z/9efqxprT+2t65ZtZUf4QF1Wcbf78TXm5rVY+IYQQQgghhBDi+sBvZyFSUvFyItwAAAAASUVORK5CYII=">
           </center>
           <div class="p-3">HISTORIA CLINICA DE SEGUIMIENTO <br><br><a href="{{url('dashboard/followUpHistory/create')}}" class="btn btn-primary">CREAR</a></div>
          </div>
          </div>
        </div>
      </div>

      
          