@extends('Layout.CustomerApp')

@section('contentFE')
@section('TopTTL','Dashboard')

    <section class="home" id="home"> </section>

        <!--container--->
        <section class="container">
            <div class="text">
                <h2>SUMMARY REPORT</h2>
            </div>
            
            <!-- FOR CARDS -->

            <div class="card-row">
              <div class="card-column">
                <div class="mainCard">
                  <div class="content-column">
                    <p>Total Employees</p>
                    <h1>{{count($applicant)}}</h1>
                  </div>
                  <div class="card-icon">
                    <i class="fa-solid fa-users"></i>
                  </div>
                </div>
              </div>

              <div class="card-column">
                <div class="mainCard">
                  <div class="content-column">
                    <p>Total Schools</p>
                    <h1>{{count($school)}}</h1>
                  </div>
                  <div class="card-icon">
                    <i class="fa-solid fa-school"></i>
                  </div>
                </div>
              </div>
              
              <div class="card-column">
                <div class="mainCard">
                  <div class="content-column">
                    <p>Total Districts</p>
                    <h1>{{count($district)}}</h1>
                  </div>
                  <div class="card-icon">
                    <i class="fa-solid fa-city"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- END FOR CARDS -->

            <div class="row">
                <div class="column" id="shart">    
                    <h5 class='namechart'>SCHOOLS PER DISTRICT</h5>
                    <canvas id="myChart" ></canvas>          
                </div>
                
                <div class="column" id="shart">
                    <h5 class='namechart' >SCHOOL LEVELS</h5>
                    <canvas id="myCharts" ></canvas>                      
                </div>    
            </div>
        </section>

        <!--destination section--->
        <section class="destination" id="destination">
            <div class="core">
                <h5 class='namechart'>EMPLOYEE INFORMATION ANALYTICS</h5>
                
                <div class="row app-row">
                  <div class="column app-column">
                    <canvas id="myChartb"></canvas>
                  </div>
                  <div class="column app-column" id="shart1">
                    <canvas id="ToAChart"></canvas>           
                  </div>
                </div>

                <div class="row app-row" style="margin-bottom: -80px">
                  <div class="column app-column">
                    <canvas id="DepartmentChart"></canvas>
                  </div>

                  <div class="column app-column">
                    <canvas id="PositionChart"></canvas>
                  <div>
                </div>
            </div>
        </section>

   
    </section>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
      const ctxss = document.getElementById('myCharts');

      new Chart(ctxss, {
        type: 'doughnut',
        data: {
            labels: [
                @foreach ($SL as $sl)   
                  '{{$sl->level}}',
                @endforeach
            ],
            datasets: [{
                label: 'Total School',
                data: [
                  @foreach ($SL as $sl)   
                    '{{$sl->TotalSchoolPerLevel}}',
                  @endforeach
                ],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        }
      });
    </script>

<script>
      const ctxs = document.getElementById('myChart');

      new Chart(ctxs, {
        type: 'polarArea',
        data: {
            labels: [
                       @foreach ($SPD as $sd)   
                          '{{$sd->District->district}}',
                        @endforeach
                    ],
          datasets: [{
                label: 'Total School',
                data: [
                       @foreach ($SPD as $sd)   
                          {{$sd->TotalSchool}},
                        @endforeach
                ],
                backgroundColor: [
                'rgb(255, 99, 132, 0.6)',
                'rgb(75, 192, 192, 0.6)',
                'rgb(255, 205, 86, 0.6)',
                'rgb(201, 203, 207, 0.6)',
                'rgb(54, 162, 235, 0.6)'
                ]
            }]
        }
      });
</script>

<!-- EMPLOYEE ANALYTICS -->

<script>
      const toa = document.getElementById('ToAChart');

      new Chart(toa, {
        type: 'doughnut',
        data: {
            labels: [
                @foreach ($TOA as $toa)
                  '{{$toa->typeofappointment}}',
                @endforeach
            ],
            datasets: [{
                label: 'Total Employees',
                data: [
                    @foreach ($TOA as $toa)
                      '{{$toa->TypeOfAppointment}}',
                    @endforeach
                ],
                backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)'
                ],
                hoverOffset: 4
            }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: true,
              text: 'Type of Application'
            }
          }
        },
      });
    </script>


<script>
        const ctx = document.getElementById('myChartb');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: [
                @foreach ($ASC as $as)
                  '{{$as->status}}',
                @endforeach
            ],
            datasets: [{
              label: 'Total Employees Per Status',
              data:  [
                  @foreach ($ASC as $as)
                    '{{$as->TotalEmployeeStatus}}',
                  @endforeach
              ],
              backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(255, 159, 64, 0.7)',
                'rgba(255, 205, 86, 0.7)',
                'rgba(75, 192, 192, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(153, 102, 255, 0.7)',
                'rgba(201, 203, 207, 0.7)',
              ],
              borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)',
              ], 
              borderRadius: 30,
              borderWidth: 1
            }]
          },
          options: {
            responsive: true,
            scales: {
              y: {
                beginAtZero: true
              }
            },
            plugins: {
              title: {
                display: true,
                text: 'Employee Status Chart'
              }
            }
          }
        });



  </script>

  <script>
    
    const statusBar = document.getElementById('DepartmentChart');

    new Chart(statusBar, {
      type: 'bar',
      data: {
        labels: [
            @foreach ($EDC as $edc)
              '{{$edc->department}}',
            @endforeach
        ],
        datasets: [{
          label: 'Total Employees Per Position',
          data:  [
            @foreach ($EDC as $edc)
              '{{$edc->TotalEmployeePerDep}}',
            @endforeach
          ],
          backgroundColor: [
            'rgb(121, 129, 255)',
          ],
          borderColor: [
            'rgb(121, 129, 255)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        indexAxis: 'y',
        elements: {
          bar: {
            borderWidth: 2,
          }
        },
        plugins: {
          title: {
            display: true,
            text: 'Employee Department Chart'
          }
        }
      },
    });

  </script>

  <script>
    
    const positionBar = document.getElementById('PositionChart');

    new Chart(positionBar, {
      type: 'bar',
      data: {
      labels: [
          @foreach ($EPC as $epc)
            '{{$epc->position}}',
          @endforeach
      ],
      datasets: [{
        label: 'Total Employees Per Position',
        data:  [
            @foreach ($EPC as $epc)
              '{{$epc->TotalEmployeePerPos}}',
            @endforeach
        ],
        backgroundColor: [
          'rgb(121, 129, 255)',
        ],
        borderColor: [
          'rgb(121, 129, 255)',
        ],
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        indexAxis: 'y',
        elements: {
          bar: {
            borderWidth: 2,
          }
        },
        plugins: {
          title: {
            display: true,
            text: 'Employee Position Chart'
          }
        }
      },
    });

  </script>

@endsection  










