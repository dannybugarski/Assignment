@extends('layouts.master')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ STYLES ---------->


<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
        
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- NAVBAR-->
    <link href="navbar-top.css" rel="stylesheet">
  <script async="" src="https://negbar.ad-blocker.org/chrome/adblocker-chromeglobalinjectjs.js"></script></head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="#">Fakebook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" <a href="{{url("/")}}"">Home</a> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href={{url("recent_post")}}>Recent Posts</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href={{url("recent_item")}}>Unique Users</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href={{url("documentation")}}>Documentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href={{url("Er_diagram")}}>Diagram</a>
      </li>
    </ul>
    <form class="form-inline mt-2 mt-md-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

@section('title')
  item list
@endsection
  
@section('content')
    <!--- \\\\\\\Post-->
    <div class="card gedf-card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex justify-content-between align-items-center">
                <div class="mr-2">
                    <img class="rounded-circle" width="45" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQDw0TEw0PFRMXDxUQFRUQEA8NEBIPFREWFhUXFxUYHiggGBolGxUVITEhJSkrLi4uFx8zODYsNygtLisBCgoKDg0OGhAQGislHx0rLS8tLS0tNzAtLS0wLS8tKy0tLS0yLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABgcBBAUCA//EAEQQAAECAwQGBgYHBwQDAAAAAAEAAgMRMQQhYXEFBhJBUfETIoGRobEHFjJUotEjQlJicoLBFDNTkrLC8BVEY3Mkk+H/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAwQFAgEG/8QAKxEBAAIBAgQEBwEBAQAAAAAAAAECAwQREiExQRNRUmEUIjJCcYGRsTOh/9oADAMBAAIRAxEAPwC70CfBAJ3DkgE7t6ATLNAJlmgTlVAnvKBPebh5DFBw9Ia22ODOcbbI+rC+kPafZHerFNLkv22/KC+ox17/AMR22+kGIZ9FZ2tHGK4vP8rZS7yrVNBH3T/Fe2sn7YcW06226J/uC0cIbWM8ZT8VYrpcUdkM6jJPdz4uk7Q/2rTHOcWIR5qWMdI6RH8Rze09Zn+tZ0QmricySutvJywHkUJ7DJJGxD0jHZ7NojD8MWI3yK5nHSesR/HsXtHeXQs+tNth0tLzg8NieJE1HbTYp7JI1GSO7sWP0gRm/vYEN44sLoR8Zg+Cr30NftlNXWW7wkWjtcrHF9qIYTuEUbI/mF3eVWvpMle2/wCFimpx29nfhxA4BwIIN4IIIlmFVmNlhkFABnl5oAM8kCc6IBO4ckAncEAmWaDM5ICDB4IMYDkgUuFUCmaBTNApea/5RAJABc4gSE77gAgimmtdoMOYgjpX8ZyhNOf1uy7FXcWitbnflH/qpk1Va8q80J0ppy02onpYpLfsN6kMflFe2a0MeGlPphSvlvfrLnKXqjEBAQEBAQEBAQbmjtKR7OZworm3z2ZzYc2m4qO+KmT6od0yWp9MppobXpj5NtDNg/bYCYZzbVvj2Khl0UxzpzXcerieV0whRWxGhzXBzCJhzSHBwwI3KjMTE7StxMTzh6rcF49MByQKXBApmgUxKDIEq1QZQYJ3DkgxS4VQKZoFM0Cl5qg5+mdMwbIzbiu6x9ljb3uyH6m5S4sNsk7QjyZa0jeVa6e1jj2skOOxDndDaerm4/WPhgtXDp6Y+ffzZuXPbJ+HHVhCICAgICAgICAgICAgIOjobTceyunDf1Z9Zjr2O7NxxF6iy4aZI2n+pMeW2OeSydAaxQbW2TOpEA60NxvA4tP1hj3yWTm09sU8+nm0sWauSPd2KXBQJimaBTEoFLzVBkDeeSDKDBPCqDFM0CmaBS81QcDWfWVlkGyJOjEdVv1WD7Tvlv8AFWdPp5yc56K+bPGPlHVWVstcSM90SI8ucak+Q4DALXrSKxtHRm2tNp3l8V05EBAQEBAQEBAQEBAQEBAQe4MVzHNc1xa4GYLTIg8ZryYiY2l7EzE7wsbVPWsR5QoshG3Oo2L8nYb93BZWp0vB81en+NHBqOP5bdUppiVTWil5qgYnkgyBvKDM0GCZZoMUzQKXmqDga16wiyMk2RjOHVbUMb9p3+X96s6fT+JO89IV8+bw42jqq+NFc9znvcXOJ2iXGZJO8rYiIiNoZkzMzvLwvXggICAgICAgxNAmgygICAgICAgIAMpGZnW64zQWRqbrN046KMfpgOq7+K0f3DxrxWVqtNwfNXp/jS0+fj+W3X/UqxPJUloxPJBkX3oPU0HkmWaDFLzX/LkHP07pVlkguivvd7LGz9p5oP1J4BS4cU5LbQjy5IpXeVR221PjRHxIjpucZk/oOAFJLbpSKxtHSGTa02neXxXTkQEBAQEBBuaK0XFtMQMhtmakm5rRxcdyjyZK443s7pjtedoT/RepFmhAGLOK/GbWT4Bor2zWbk1l7fTyX6aWkdebuQdF2dgus8FuUNg/RVpyXnrMp4x1jpEPcTR8F468CERwdDYfMJF7R0mXs0rPWHG0jqbZIwJawwnbjDuHaw3Sykp6avJXrzQ301LdOSA6c0HGsjwHibD7L2z2XfI4ea0sOauWOX8UMuK2OebmKZEICAgICAg9Qojmua5riHAhwIMiCDMELyYiY5vYnbotbVXTgtkGbiBFZIPbQYPA4HwM1jajBOK3tPRq4MviV94dqt5oq6ZkX5eaD0g8m69BgkAFziBITvoAgqXWnTRtdoLgfo2zbDH3d7jifKS2tPh8OnPrPVk58viW9nHVhCICAgICAg9Q4Zc5rWibnODQBUuJkB3ryZiI3l7Eb8oW/oDRLLHAawSLje929z9/ZuCw82Wclt5a+LHGOu0OjieSiSA4nkgVvNECuXmg1tJWFlphPhPE2ESnvB3EcCCu6XmluKHN6RaNpU9pCyOgRosJ3tMcWnHgRmJHtW5S8XrFo7se1ZraYns1125EBAQEBAQb2hdJvssdkVt4Bk5v22Go+WICiy44yVmspMeSaW3hcFmjtjMY9pmxzQ4HiCsO1ZrO0teJiY3h9Zzy8149ekHk8SgifpA0t0cEQQZPi14tgivebspq7osXFbjnpH+qmqycNeGO6uFqs4QEBAQEBAQd/UayiJboZImGNdE7QJN8XA9iq6u3Din35LGmrvkj2WnieSx2oDieSBW80QK5eaBXLzQK3BBXfpIsobaILwPbhbJ/Ew/Jw7lqaG29Jr5M7WV2tE+aIq8qCAgICAgICCc+jrS09uzOddfEh/3tH9X8yztbi++P2vaTJ9k/pOp8KLOXmZIMO4mg7higp3WHSJtVpixZ9WeyzCG25vfXtK3cOPgpFWPlvx3mXOUqMQEBAQEBAQS30bS/aoxPu5/rYqOu+iPyt6P65/CxRxPJZbRK3miBXLzQK5eaBW4IGA5IIR6TZAWMYxPJi0NB1t+lLWfagi0lAQEBAQEBAQfew2t0GLDiNqxwcN05VHaJjtXN6xes1nu6raazFo7LnstobEZDez2XMDwfukTHasC1ZrMxPZs1mJjeH2kvHrha6W7obHGM5F/0Tc3VP8u0rGlpx5I9uaDUX4cc+6qFtdWUICAgICAgICCytStXxAYy0GIS6JBHVkA1rXbLhiTcFk6rPxzNNuktLT4eGOLfrCUVvNFTWiuXmgVy80CtwQMByQKXBBxNZ9XxbGwx0ha5gcW3BwJdL2sOqrGnz+FM8uqDNh8SOvRVC2mUICAgICAgICCyfR3b9uzOhTvhPkP+t83Dx2h2LJ1tOG+/m0tJfem3klaprSAeky1ziWeFO5rTFObjst/pd3rS0FOU2UNZbnFUKWgpCAgICAgICAgt3VWN0lisjp3CEGdrOqf6Vh6iNstvy18E744dWuXmoUpXLzQK3BAwHJApcECmaD426OIUKK8/VhuefytJXVI4rRHm5tO0TKk19AxRAQEBAQEBAQSb0e2vo7ZsTuiQ3N/M3rA9wcO1U9bTfHv5LWlttfbzWeslpKl10tHSW+0cGlsMflaJ+M1taWu2KGVqJ3yS4isIBAQEBAQEBAQSrUrWLoHCBEn0T3jZIvLIjiBf903ZFUtVp+OOOvWFvTZuD5Z6SsiuXmspolbggYDkgUuCBTNApiUEF151h/eWaHOcwIrqXXHYb4TPYtHSafpkt+lHU5vsj9oOtFREBAQEBAQEBBu6FtHRWmzP4RmT/CXAHwJUeWu9Jj2d452vE+66FgtlSulom3aLS7jHiHsLyt/HG1Ij2hjXne0z7y1F24EBAQEBAQEBB6hv2XNPAh3cZryY35PYnbmu9r9oCVCAZ4FfPTybbOA5IFLggUzQKYlApeaoKb09G27XancYz5ZBxA8At3DHDjr+GPlne8/loqVGICAgICAgICBTNBbH+vDDvWL4LW8VVMR0y48ST3lbMeTKeV68EBAQEBAQEBAQWlqVpXp7Kxk+vCAhu/CB1HdoHeCsbV4uDJv2lqabJxU94SClwVZYKZoFMSgUvNUHN1h0mLLZ4kUy2pbLBxiGnzOAKlw4/EvEI8uTgrMqfJ3lbrHEBAQEBAQEBAQEHQ/1B3EqLw4ScctB4kSMZKTdwwvXggICAgICAgICDqataSfZrTCc2jnCG8bnMcQD2ioyUOfHF6TCXDeaXiVvUzWG1ymJQKXmqBieSCr9edJPjWt7DcyEdhoxkC5xxNOxbGkxxXHxd5ZmpvNr7eSOq0rCAgICAgICAgICDb/YzwXHHDvgl50nD2I9obwjRG9zyExzvSJ9oeXja0/lrLtyICAgICAgICAg+1iE4sECpisHbtBc35Vn8Oq/VC7KZlfPtopeaoGJ5IGJ5IKh1pH/AJ1r/wC0nvAK3NPzxV/DIz/9JctTIhAQEBAQEBAQEGChKz/V/ALI8dqeEhWuEDo7daRxeHj8zQ4+JK0NNbfFCjqI2yS4ynQiAgICAgICAgIJJqboKJGjQopaRCY8PmRLbc0zDW8RMCZoqmqz1pWa95WdPim1ot2hZ1LzVZDTMTyQMTyQK3miCv8AXvQUTpXWljS5jgNsATLHNAG1L7JAF+a09Hnjh4J7M/VYZ344Q1X1MQEBAQEBAQEBBtaKgdLaLOz7UVjewuE/Ca4yW2pM+zukb2iPddawGyrv0lWTZjQIu58MsP4mGfk7wWnob/LNfJn6yvzRKHK+piAgICAgIPUNhcQ1rSXGgaC4nICq8mYh7EbpFo3Uu1RZF4bCB+31ny/AP1IVXJrMdenNYppb268ks0ZqbZIEi5pjP/5JbM8GC7vmqWTV5LdOS3TTUr15pE0Bo8AB5BVVgxPJAxPJAreaIFcvNArl5oOHpXVSyWgk9H0bt74UmTOLaHOU1Yx6rJTlvvHugvp6W57IlpLUa0Q5mE5sVvAfRvHYbj3q7j1tJ5W5Kl9JeOnNGrRAfDcWvY5rhUOBaR2FXItExvCtMTE7S+a9eCAgICAgIJHqDZOktrHbobHRDnLZH9U+xVdZfbFt5rOlrvk/C0ljtNHde7D0tjiO+tDIij8Iud8JJ7Fa0l+HJHvyV9TTix/hVi2GWICAgICCT6v6nxbQGviEw4ZvAl9I8cQD7IxPcqebV1p8tecrWLTWvztyhPtG6JgWVuzChNBIvdV7vxON5Wbky3vPzSv0x1p9MN2mJUbspeaoGJ5IGJ5IFbzRArl5oFcvNArcKIGA5IFLgg1rfo+DGbsRITXj7wvGINW9i7pktSd6zs5tSto2tCDaf1IfDBfZyXtqYZviD8J+tlXNaGHWxPK/9UculmOdEPIlnRX1MQEBAQEFiejiw7MCLFl+8fsg/cZMXfmLu5ZeuvveK+TR0lNqzbzTGSorbxEYHAhwmCCCDSREikTsKZ0xYDZ48WEZ9V3VnvYb2nuIW9iv4lIsxslOC01aakcCAgIJdqJoFsVxjxGza10mNIuc8VceIHnkqOsz8McFesrmlw8XzT2WJTNZbQKYlApeaoGJ5IGJ5IFbzRArl5oFcvNArcKIB4DkgUuCBS4VQKYlApeaoIVr7oAbBtTGycCOlAo5puDsxvwyWho8/Pgt+lLVYeXHH7QJaSgICAg+lmgOiPYxom5zgwZkyC5taIiZnpD2ImZ2juufR9lbBhQoTKMYGzyF5zNe1YN7Ta02nu2a1itYiOzZkuXTBCCGekTRW2xloaL2dR+MMnqnsJ+LBX9Fl2ngnup6vHvHHHZX602eICDBQXNoWyCBZrPDAvEMTxcRNx7yVg5b8V5ls468NYhu0xKjdlLzVAxPJAxPJAreaIFcvNArl5oFbhRAwHJApcEClwqgUxKBS81QKXlB4jwQ9j2vHVc0tI+6RIr2JmJ3h5MbxtKk7RBLHvaate5hzaSP0X0FZ4oiWLMbTs8L14ICCY+jvRO3EdaCLmTYz8ZHWIyBl+bBUNbl2jgjv1XNJj3njnssKlwWY0GUGCJ5eaDxGhtiNc1wBYQWuBo4ESIyXsTMTvDyY3jaVQawaKdZY74ZmW+0x32oZp2ihxC3MOWMlN4/bIy45x22c5SoxACC8gQBMXz8V863Cl5qgYnkgYnkgVvNECuXmgVy80CtwogYDkgUuCBS4VQKYlApeaoFLygYnkgC+8oKb06QbXayKftESX/sK3sP/Ov4hj5frn8y0VIjEGzo2wvtEWHCYOs4ynuaN7jgBeuMl4pWbT2d0pNrbQuHR9jZAhQ4UMXNbL5k4kzPasK95vabT3a9KxWNobNLt65dMoMETyQYrcEHH1n0K21wdgSERvWhu3A72nA/I7lPp804rb9p6oc2KMlfdVEaE5jnNc0hzSWkG4gis1tRMTG8MqYmJ2l4XrwQdKBp+1wwA21RQAJAF21IcBOdyhnBjnnNYSxmyRyiX09Zrb73E+H5Lz4bF6Xvj5PM9Zbb73E+H5J8Ni9J4+TzPWW2+9xPh+SfDYvSePk9R6zW0/7uJ8HyT4bF6Tx8nmHWa2+9xPg+SfDYvSePk8z1mt3vcT4Pknw2L0nj5PM9Zrb73E+D5J8Ni9J4+TzPWa2+9xPg+SfDYvSePk9R6zW33uJ8HyT4bF6Tx8nmes1t97ifB8k+Gxek8fJ5nrNbfe4nwfJPhsXpPHyeZ6zW33uJ8HyT4bF6Tx8nmes1t97ifB8k+Gxek8fJ5nrNbfe4nwfJPhsXpPHyebzE1jtrhI2uLLAhp7wvY0+L0w8nPk9Tlkz/AMqpkQgZILP1N0D+yw9t4+meL/8AjZUNz3n/AOLI1WfxJ2jpDT0+HgjeespHS4VVRZZF2aDKDBvuQYwHJApcEEW1y1a6cdLCH0wHWH8Vo/uG7jTgrml1PB8tun+KuowcfzV6/wCq2IlMEXzlfcZrWZogICAgICAgICAgICAgICAgICAgnepWrJaW2iM3re1CYR7PB7hx4Dt4SzdXqfsp+1/TYPvt+k3pcKrPXSmJQZF2aDKDBO4ckGKXBApmgUxKCK626qCPONCkI31m3BsX5Ox37+Ku6bVcHy26f4q59Px/NXr/AKrmJDc1zmuaQ4GRDgQQeBC1ImJjdnTG3J5XrwQEBAQEBAQEBAQEBAQEBAwQTvVPVEtLY1ob1vaZCcPZ4OeOPBvfwGbqdX9lP6v4NN91/wCJvS4VWeulMSgUzQZA3mqDKDBO4IMUzQKYlApeaoGJ5IOLrDq3CtgLj1IoHVeBu3B4+sPEKxg1FsU+ceSHLgrk/KtdLaIjWV+zFYQPquF7HjA/pVauPLXJG9ZZuTHak7S0VKjEBAQEBAQEBAQEBAQEGzo+wRbQ8MhQy52+VGji40AzXF8laRvaXdKWtO0QsbVvVSHZZPfKJG4y6kP8I44nwWXn1U5OUcoaGHTxTnPOUjpcKqoslMSgUzQKXlBkDeeSD0g8kyzQYpmgUvNUDE8kDE8kCt5og+dps7IzS17GuYahwBBXtbTWd4eTETG0oVpnUSe06zPu/hxD4Nf8+9aGLW9r/wBUsmk70/iG2yxxYLtmJDcw8HCU8jQ5hX63reN6yp2rNZ2tD4LpyICAgICAgICAg+lngPiODWMc5x3MBce4Lm1oiN5nk9iJmdoS3Q2osR5BtDtgfYYQ5+RdQdk+xUsutiOVP6t49JM87pzYbDCgMEOFDa0YeZNSc1nXva872lerSKxtENilwquXRTEoFM0Cl5QMTyQZF95QZmgG5BgCV+9AA3nkgAbygSnVAlPLzQDfl5oB4bkHytNmZEbsPhsc3eHtDh3Heva2ms7xLyaxMbSjWkdRbM+fROfCPAHpGdzr+4q3TW3r9XNWvpKT05I5bdR7XDnsdHFH3XbDu0OkPEq1TW4568le2lvHTm41p0RaYXt2aMMdhxHeLlYrlpPSYQTjvHWJaRuzUjgQEGJobtuz6NjxfYs8V34YbyO+UlxbJSOsw7ilp6RLs2PUq2xPaYyGOMR4n3Nn4yUF9ZijpzTV0uSfZIdH6hQWy6WK+JxDfomZXX+IVW+uvP0xssU0lY+qd0nsdhhQW7EKExg37LQO87zmqdr2tO9pWa1rWNohsUuC5dFKVQJSxKABLNAA3lAA3nkgSneUCuSD0gwgICAUGSgICDAQAgIMoCDhax07FYwocqt9J+0c1q4+jNv1fKw+0F1fo8p1WHq1uyWXnaOJJ1UWBACDAQEBAQEBBlBgoMoMIP/Z" alt="">
                </div>
                <div class="ml-2">
                    {{$item->Fullname}}
                </div>
            </div>
        </div>

    </div>
    <div class="card-body">
        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{$item->Datee}}</div>
            <h5 class="card-title">{{$item->summary}}</h5>
        </a>

        <p class="card-text">
        {{$item->details}}
        </p>
    </div>
</div>
<!-- Post /////-->
  
    
    <a href="{{url("/")}}"">Home /</a>
    <a href="{{url("delete_item/$item->id")}}">Delete Item /</a> 
    <a href="{{url("update_item/$item->id")}}">Update item</a>

<h4>Comments</h4>

<!--- \\\\\\\Comment-->
<div class="card gedf-card">
<div class="card-header">
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex justify-content-between align-items-center">
            <div class="mr-2">
                <img class="rounded-circle" width="15" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAQDw0TEw0PFRMXDxUQFRUQEA8NEBIPFREWFhUXFxUYHiggGBolGxUVITEhJSkrLi4uFx8zODYsNygtLisBCgoKDg0OGhAQGislHx0rLS8tLS0tNzAtLS0wLS8tKy0tLS0yLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABgcBBAUCA//EAEQQAAECAwQGBgYHBwQDAAAAAAEAAgMRMQQhYXEFBhJBUfETIoGRobEHFjJUotEjQlJicoLBFDNTkrLC8BVEY3Mkk+H/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAwQFAgEG/8QAKxEBAAIBAgQEBwEBAQAAAAAAAAECAwQREiExQRNRUmEUIjJCcYGRsTOh/9oADAMBAAIRAxEAPwC70CfBAJ3DkgE7t6ATLNAJlmgTlVAnvKBPebh5DFBw9Ia22ODOcbbI+rC+kPafZHerFNLkv22/KC+ox17/AMR22+kGIZ9FZ2tHGK4vP8rZS7yrVNBH3T/Fe2sn7YcW06226J/uC0cIbWM8ZT8VYrpcUdkM6jJPdz4uk7Q/2rTHOcWIR5qWMdI6RH8Rze09Zn+tZ0QmricySutvJywHkUJ7DJJGxD0jHZ7NojD8MWI3yK5nHSesR/HsXtHeXQs+tNth0tLzg8NieJE1HbTYp7JI1GSO7sWP0gRm/vYEN44sLoR8Zg+Cr30NftlNXWW7wkWjtcrHF9qIYTuEUbI/mF3eVWvpMle2/wCFimpx29nfhxA4BwIIN4IIIlmFVmNlhkFABnl5oAM8kCc6IBO4ckAncEAmWaDM5ICDB4IMYDkgUuFUCmaBTNApea/5RAJABc4gSE77gAgimmtdoMOYgjpX8ZyhNOf1uy7FXcWitbnflH/qpk1Va8q80J0ppy02onpYpLfsN6kMflFe2a0MeGlPphSvlvfrLnKXqjEBAQEBAQEBAQbmjtKR7OZworm3z2ZzYc2m4qO+KmT6od0yWp9MppobXpj5NtDNg/bYCYZzbVvj2Khl0UxzpzXcerieV0whRWxGhzXBzCJhzSHBwwI3KjMTE7StxMTzh6rcF49MByQKXBApmgUxKDIEq1QZQYJ3DkgxS4VQKZoFM0Cl5qg5+mdMwbIzbiu6x9ljb3uyH6m5S4sNsk7QjyZa0jeVa6e1jj2skOOxDndDaerm4/WPhgtXDp6Y+ffzZuXPbJ+HHVhCICAgICAgICAgICAgIOjobTceyunDf1Z9Zjr2O7NxxF6iy4aZI2n+pMeW2OeSydAaxQbW2TOpEA60NxvA4tP1hj3yWTm09sU8+nm0sWauSPd2KXBQJimaBTEoFLzVBkDeeSDKDBPCqDFM0CmaBS81QcDWfWVlkGyJOjEdVv1WD7Tvlv8AFWdPp5yc56K+bPGPlHVWVstcSM90SI8ucak+Q4DALXrSKxtHRm2tNp3l8V05EBAQEBAQEBAQEBAQEBAQe4MVzHNc1xa4GYLTIg8ZryYiY2l7EzE7wsbVPWsR5QoshG3Oo2L8nYb93BZWp0vB81en+NHBqOP5bdUppiVTWil5qgYnkgyBvKDM0GCZZoMUzQKXmqDga16wiyMk2RjOHVbUMb9p3+X96s6fT+JO89IV8+bw42jqq+NFc9znvcXOJ2iXGZJO8rYiIiNoZkzMzvLwvXggICAgICAgxNAmgygICAgICAgIAMpGZnW64zQWRqbrN046KMfpgOq7+K0f3DxrxWVqtNwfNXp/jS0+fj+W3X/UqxPJUloxPJBkX3oPU0HkmWaDFLzX/LkHP07pVlkguivvd7LGz9p5oP1J4BS4cU5LbQjy5IpXeVR221PjRHxIjpucZk/oOAFJLbpSKxtHSGTa02neXxXTkQEBAQEBBuaK0XFtMQMhtmakm5rRxcdyjyZK443s7pjtedoT/RepFmhAGLOK/GbWT4Bor2zWbk1l7fTyX6aWkdebuQdF2dgus8FuUNg/RVpyXnrMp4x1jpEPcTR8F468CERwdDYfMJF7R0mXs0rPWHG0jqbZIwJawwnbjDuHaw3Sykp6avJXrzQ301LdOSA6c0HGsjwHibD7L2z2XfI4ea0sOauWOX8UMuK2OebmKZEICAgICAg9Qojmua5riHAhwIMiCDMELyYiY5vYnbotbVXTgtkGbiBFZIPbQYPA4HwM1jajBOK3tPRq4MviV94dqt5oq6ZkX5eaD0g8m69BgkAFziBITvoAgqXWnTRtdoLgfo2zbDH3d7jifKS2tPh8OnPrPVk58viW9nHVhCICAgICAg9Q4Zc5rWibnODQBUuJkB3ryZiI3l7Eb8oW/oDRLLHAawSLje929z9/ZuCw82Wclt5a+LHGOu0OjieSiSA4nkgVvNECuXmg1tJWFlphPhPE2ESnvB3EcCCu6XmluKHN6RaNpU9pCyOgRosJ3tMcWnHgRmJHtW5S8XrFo7se1ZraYns1125EBAQEBAQb2hdJvssdkVt4Bk5v22Go+WICiy44yVmspMeSaW3hcFmjtjMY9pmxzQ4HiCsO1ZrO0teJiY3h9Zzy8149ekHk8SgifpA0t0cEQQZPi14tgivebspq7osXFbjnpH+qmqycNeGO6uFqs4QEBAQEBAQd/UayiJboZImGNdE7QJN8XA9iq6u3Din35LGmrvkj2WnieSx2oDieSBW80QK5eaBXLzQK3BBXfpIsobaILwPbhbJ/Ew/Jw7lqaG29Jr5M7WV2tE+aIq8qCAgICAgICCc+jrS09uzOddfEh/3tH9X8yztbi++P2vaTJ9k/pOp8KLOXmZIMO4mg7higp3WHSJtVpixZ9WeyzCG25vfXtK3cOPgpFWPlvx3mXOUqMQEBAQEBAQS30bS/aoxPu5/rYqOu+iPyt6P65/CxRxPJZbRK3miBXLzQK5eaBW4IGA5IIR6TZAWMYxPJi0NB1t+lLWfagi0lAQEBAQEBAQfew2t0GLDiNqxwcN05VHaJjtXN6xes1nu6raazFo7LnstobEZDez2XMDwfukTHasC1ZrMxPZs1mJjeH2kvHrha6W7obHGM5F/0Tc3VP8u0rGlpx5I9uaDUX4cc+6qFtdWUICAgICAgICCytStXxAYy0GIS6JBHVkA1rXbLhiTcFk6rPxzNNuktLT4eGOLfrCUVvNFTWiuXmgVy80CtwQMByQKXBBxNZ9XxbGwx0ha5gcW3BwJdL2sOqrGnz+FM8uqDNh8SOvRVC2mUICAgICAgICCyfR3b9uzOhTvhPkP+t83Dx2h2LJ1tOG+/m0tJfem3klaprSAeky1ziWeFO5rTFObjst/pd3rS0FOU2UNZbnFUKWgpCAgICAgICAgt3VWN0lisjp3CEGdrOqf6Vh6iNstvy18E744dWuXmoUpXLzQK3BAwHJApcECmaD426OIUKK8/VhuefytJXVI4rRHm5tO0TKk19AxRAQEBAQEBAQSb0e2vo7ZsTuiQ3N/M3rA9wcO1U9bTfHv5LWlttfbzWeslpKl10tHSW+0cGlsMflaJ+M1taWu2KGVqJ3yS4isIBAQEBAQEBAQSrUrWLoHCBEn0T3jZIvLIjiBf903ZFUtVp+OOOvWFvTZuD5Z6SsiuXmspolbggYDkgUuCBTNApiUEF151h/eWaHOcwIrqXXHYb4TPYtHSafpkt+lHU5vsj9oOtFREBAQEBAQEBBu6FtHRWmzP4RmT/CXAHwJUeWu9Jj2d452vE+66FgtlSulom3aLS7jHiHsLyt/HG1Ij2hjXne0z7y1F24EBAQEBAQEBB6hv2XNPAh3cZryY35PYnbmu9r9oCVCAZ4FfPTybbOA5IFLggUzQKYlApeaoKb09G27XancYz5ZBxA8At3DHDjr+GPlne8/loqVGICAgICAgICBTNBbH+vDDvWL4LW8VVMR0y48ST3lbMeTKeV68EBAQEBAQEBAQWlqVpXp7Kxk+vCAhu/CB1HdoHeCsbV4uDJv2lqabJxU94SClwVZYKZoFMSgUvNUHN1h0mLLZ4kUy2pbLBxiGnzOAKlw4/EvEI8uTgrMqfJ3lbrHEBAQEBAQEBAQEHQ/1B3EqLw4ScctB4kSMZKTdwwvXggICAgICAgICDqataSfZrTCc2jnCG8bnMcQD2ioyUOfHF6TCXDeaXiVvUzWG1ymJQKXmqBieSCr9edJPjWt7DcyEdhoxkC5xxNOxbGkxxXHxd5ZmpvNr7eSOq0rCAgICAgICAgICDb/YzwXHHDvgl50nD2I9obwjRG9zyExzvSJ9oeXja0/lrLtyICAgICAgICAg+1iE4sECpisHbtBc35Vn8Oq/VC7KZlfPtopeaoGJ5IGJ5IKh1pH/AJ1r/wC0nvAK3NPzxV/DIz/9JctTIhAQEBAQEBAQEGChKz/V/ALI8dqeEhWuEDo7daRxeHj8zQ4+JK0NNbfFCjqI2yS4ynQiAgICAgICAgIJJqboKJGjQopaRCY8PmRLbc0zDW8RMCZoqmqz1pWa95WdPim1ot2hZ1LzVZDTMTyQMTyQK3miCv8AXvQUTpXWljS5jgNsATLHNAG1L7JAF+a09Hnjh4J7M/VYZ344Q1X1MQEBAQEBAQEBBtaKgdLaLOz7UVjewuE/Ca4yW2pM+zukb2iPddawGyrv0lWTZjQIu58MsP4mGfk7wWnob/LNfJn6yvzRKHK+piAgICAgIPUNhcQ1rSXGgaC4nICq8mYh7EbpFo3Uu1RZF4bCB+31ny/AP1IVXJrMdenNYppb268ks0ZqbZIEi5pjP/5JbM8GC7vmqWTV5LdOS3TTUr15pE0Bo8AB5BVVgxPJAxPJAreaIFcvNArl5oOHpXVSyWgk9H0bt74UmTOLaHOU1Yx6rJTlvvHugvp6W57IlpLUa0Q5mE5sVvAfRvHYbj3q7j1tJ5W5Kl9JeOnNGrRAfDcWvY5rhUOBaR2FXItExvCtMTE7S+a9eCAgICAgIJHqDZOktrHbobHRDnLZH9U+xVdZfbFt5rOlrvk/C0ljtNHde7D0tjiO+tDIij8Iud8JJ7Fa0l+HJHvyV9TTix/hVi2GWICAgICCT6v6nxbQGviEw4ZvAl9I8cQD7IxPcqebV1p8tecrWLTWvztyhPtG6JgWVuzChNBIvdV7vxON5Wbky3vPzSv0x1p9MN2mJUbspeaoGJ5IGJ5IFbzRArl5oFcvNArcKIGA5IFLgg1rfo+DGbsRITXj7wvGINW9i7pktSd6zs5tSto2tCDaf1IfDBfZyXtqYZviD8J+tlXNaGHWxPK/9UculmOdEPIlnRX1MQEBAQEFiejiw7MCLFl+8fsg/cZMXfmLu5ZeuvveK+TR0lNqzbzTGSorbxEYHAhwmCCCDSREikTsKZ0xYDZ48WEZ9V3VnvYb2nuIW9iv4lIsxslOC01aakcCAgIJdqJoFsVxjxGza10mNIuc8VceIHnkqOsz8McFesrmlw8XzT2WJTNZbQKYlApeaoGJ5IGJ5IFbzRArl5oFcvNArcKIB4DkgUuCBS4VQKYlApeaoIVr7oAbBtTGycCOlAo5puDsxvwyWho8/Pgt+lLVYeXHH7QJaSgICAg+lmgOiPYxom5zgwZkyC5taIiZnpD2ImZ2juufR9lbBhQoTKMYGzyF5zNe1YN7Ta02nu2a1itYiOzZkuXTBCCGekTRW2xloaL2dR+MMnqnsJ+LBX9Fl2ngnup6vHvHHHZX602eICDBQXNoWyCBZrPDAvEMTxcRNx7yVg5b8V5ls468NYhu0xKjdlLzVAxPJAxPJAreaIFcvNArl5oFbhRAwHJApcEClwqgUxKBS81QKXlB4jwQ9j2vHVc0tI+6RIr2JmJ3h5MbxtKk7RBLHvaate5hzaSP0X0FZ4oiWLMbTs8L14ICCY+jvRO3EdaCLmTYz8ZHWIyBl+bBUNbl2jgjv1XNJj3njnssKlwWY0GUGCJ5eaDxGhtiNc1wBYQWuBo4ESIyXsTMTvDyY3jaVQawaKdZY74ZmW+0x32oZp2ihxC3MOWMlN4/bIy45x22c5SoxACC8gQBMXz8V863Cl5qgYnkgYnkgVvNECuXmgVy80CtwogYDkgUuCBS4VQKYlApeaoFLygYnkgC+8oKb06QbXayKftESX/sK3sP/Ov4hj5frn8y0VIjEGzo2wvtEWHCYOs4ynuaN7jgBeuMl4pWbT2d0pNrbQuHR9jZAhQ4UMXNbL5k4kzPasK95vabT3a9KxWNobNLt65dMoMETyQYrcEHH1n0K21wdgSERvWhu3A72nA/I7lPp804rb9p6oc2KMlfdVEaE5jnNc0hzSWkG4gis1tRMTG8MqYmJ2l4XrwQdKBp+1wwA21RQAJAF21IcBOdyhnBjnnNYSxmyRyiX09Zrb73E+H5Lz4bF6Xvj5PM9Zbb73E+H5J8Ni9J4+TzPWW2+9xPh+SfDYvSePk9R6zW0/7uJ8HyT4bF6Tx8nmHWa2+9xPg+SfDYvSePk8z1mt3vcT4Pknw2L0nj5PM9Zrb73E+D5J8Ni9J4+TzPWa2+9xPg+SfDYvSePk9R6zW33uJ8HyT4bF6Tx8nmes1t97ifB8k+Gxek8fJ5nrNbfe4nwfJPhsXpPHyeZ6zW33uJ8HyT4bF6Tx8nmes1t97ifB8k+Gxek8fJ5nrNbfe4nwfJPhsXpPHyebzE1jtrhI2uLLAhp7wvY0+L0w8nPk9Tlkz/AMqpkQgZILP1N0D+yw9t4+meL/8AjZUNz3n/AOLI1WfxJ2jpDT0+HgjeespHS4VVRZZF2aDKDBvuQYwHJApcEEW1y1a6cdLCH0wHWH8Vo/uG7jTgrml1PB8tun+KuowcfzV6/wCq2IlMEXzlfcZrWZogICAgICAgICAgICAgICAgICAgnepWrJaW2iM3re1CYR7PB7hx4Dt4SzdXqfsp+1/TYPvt+k3pcKrPXSmJQZF2aDKDBO4ckGKXBApmgUxKCK626qCPONCkI31m3BsX5Ox37+Ku6bVcHy26f4q59Px/NXr/AKrmJDc1zmuaQ4GRDgQQeBC1ImJjdnTG3J5XrwQEBAQEBAQEBAQEBAQEBAwQTvVPVEtLY1ob1vaZCcPZ4OeOPBvfwGbqdX9lP6v4NN91/wCJvS4VWeulMSgUzQZA3mqDKDBO4IMUzQKYlApeaoGJ5IOLrDq3CtgLj1IoHVeBu3B4+sPEKxg1FsU+ceSHLgrk/KtdLaIjWV+zFYQPquF7HjA/pVauPLXJG9ZZuTHak7S0VKjEBAQEBAQEBAQEBAQEGzo+wRbQ8MhQy52+VGji40AzXF8laRvaXdKWtO0QsbVvVSHZZPfKJG4y6kP8I44nwWXn1U5OUcoaGHTxTnPOUjpcKqoslMSgUzQKXlBkDeeSD0g8kyzQYpmgUvNUDE8kDE8kCt5og+dps7IzS17GuYahwBBXtbTWd4eTETG0oVpnUSe06zPu/hxD4Nf8+9aGLW9r/wBUsmk70/iG2yxxYLtmJDcw8HCU8jQ5hX63reN6yp2rNZ2tD4LpyICAgICAgICAg+lngPiODWMc5x3MBce4Lm1oiN5nk9iJmdoS3Q2osR5BtDtgfYYQ5+RdQdk+xUsutiOVP6t49JM87pzYbDCgMEOFDa0YeZNSc1nXva872lerSKxtENilwquXRTEoFM0Cl5QMTyQZF95QZmgG5BgCV+9AA3nkgAbygSnVAlPLzQDfl5oB4bkHytNmZEbsPhsc3eHtDh3Heva2ms7xLyaxMbSjWkdRbM+fROfCPAHpGdzr+4q3TW3r9XNWvpKT05I5bdR7XDnsdHFH3XbDu0OkPEq1TW4568le2lvHTm41p0RaYXt2aMMdhxHeLlYrlpPSYQTjvHWJaRuzUjgQEGJobtuz6NjxfYs8V34YbyO+UlxbJSOsw7ilp6RLs2PUq2xPaYyGOMR4n3Nn4yUF9ZijpzTV0uSfZIdH6hQWy6WK+JxDfomZXX+IVW+uvP0xssU0lY+qd0nsdhhQW7EKExg37LQO87zmqdr2tO9pWa1rWNohsUuC5dFKVQJSxKABLNAA3lAA3nkgSneUCuSD0gwgICAUGSgICDAQAgIMoCDhax07FYwocqt9J+0c1q4+jNv1fKw+0F1fo8p1WHq1uyWXnaOJJ1UWBACDAQEBAQEBBlBgoMoMIP/Z" alt="">
            </div>
            <div class="ml-2">
                John Hollins
            </div>
        </div>
    </div>

</div>
<div class="card-body">
    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{$item->Datee}}</div>
    </a>

    <p class="card-text">
    Wow, very cool!
    </p>
</div>
</div>
<!-- Comment /////-->

<!--- \\\\\\\Comment-->
<div class="card gedf-card">
<div class="card-header">
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex justify-content-between align-items-center">
            <div class="mr-2">
                <img class="rounded-circle" width="15" src="data:image/jpeg;base64,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" alt="">
            </div>
            <div class="ml-2">
                Hunter Gray
            </div>
        </div>
    </div>

</div>
<div class="card-body">
    <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>{{$item->Datee}}</div>
    </a>

    <p class="card-text">
    Sick
    </p>
</div>
</div>
<!-- Comment /////-->

@endsection

