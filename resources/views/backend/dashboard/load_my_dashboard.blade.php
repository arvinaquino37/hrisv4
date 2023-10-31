<div class="row">
    <!-- Dashboard Summery Card Start -->

    @foreach ($data['dashboardMenus']['today'] as $key => $item)
        <!-- Single Dashboard Summery Card Start -->
        <div class="col-12 col-md-6 col-lg-3 col-xl-3 pb-24">
            <div class="card summery-card ot-card h-100">
                <div class="card-heading d-flex align-items-center">
                    <div class="card-icon {{ @$item['color_class'] }} dashboard-card-icon">
                        <i class="{{ $item['image'] }}"></i>
                    </div>
                    <div class="card-content">
                        <h4> {{ @$item['title'] }}</h4>
                        <h1> {{ @$item['number'] }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Dashboard Summery Card End -->
    @endforeach

    <div class="col-md-8 pb-30">
        <div class="card ot-card">
            <div class="card-header d-flex flex-row justify-content-between align-items-baseline">
                <div class="card-title">
                    <h3>{{ _trans('dashboard.Project Status') }}</h3>
                </div>
            </div>
            <div class="card-body pt-0">
                <div id="project_summary_chart" class="custom-chart"></div>
            </div>
        </div>
    </div>

    <div class="col-md-4 pb-30">
        <div class="card ot-card">
            <div class="card-header d-flex flex-row justify-content-between align-items-baseline">
                <div class="card-title">
                    <h3>Who's Still in here?</h3>
                    <p class="text-md fw-bold mb-0">In (<span style="color: red">{{$countIn}}</span>)</p>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                  <div class="col">
                    <div class="left-inner-addon input-container">
                      <input type="text" class="form-control" id="searchUserNoOut" onkeyup="NoOutFunc()" placeholder="Search User..." />
                    </div>
                  </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="table-responsive" style="overflow: auto; height: 34vh !important;">
                        <table class="table table-hover" id="NoOutTable">
                        <tbody>
                            @foreach ($noOut as $item)
                            <tr>
                                <td>
                                    <div class="d-flex py-1">
                                        <div>
                                            <img src="{{uploaded_asset(@$data['attendance_data']->check_in_image)}}" class="avatar me-3" style="object-fit: cover; height: 50px; width: 50px; " alt="User Picture">                                  
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $item->User->name }}</h6>
                                            <p class="text-sm fw-bold mb-0">{{ $item->check_in }}</p>
                                        </div>
                                    </div>                                  
                                </td>
                            <tr>
                            @endforeach                            
                        </tbody>
                        </table>      
                    </div>
                </div>                
            </div>
        </div>
    </div>

    <div class="col-md-6 pb-30">
        <div class="card ot-card">
            <div class="card-header d-flex flex-row justify-content-between align-items-baseline">
                <div class="card-title">
                    <h3>{{ _trans('dashboard.Appointment Schedule') }}</h3>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="custom-chart table-content table-basic">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-left">{{ _trans('common.Title') }}</th>
                                        <th>{{ _trans('common.With') }}</th>
                                        <th>{{ _trans('common.Location') }}</th>
                                        <th>{{ _trans('common.Date Time') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody" id="appointment_schedule">
                                </tbody>
                            </table>
                        </div>
                        <!--  table end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 pb-30">
        <div class="card ot-card">
            <div class="card-header d-flex flex-row justify-content-between align-items-baseline">
                <div class="card-title">
                    <h3>{{ _trans('dashboard.Meeting schedule') }}</h3>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="custom-chart table-content table-basic">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead">
                                    <tr>
                                        <th class="text-left">{{ _trans('common.Title') }}</th>
                                        <th>{{ _trans('common.With') }}</th>
                                        <th>{{ _trans('common.Location') }}</th>
                                        <th>{{ _trans('common.Date Time') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody" id="meeting_schedule">
                                </tbody>
                            </table>
                        </div>
                        <!--  table end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function NoOutFunc() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("searchUserNoOut");
      filter = input.value.toUpperCase();
      table = document.getElementById("NoOutTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        var allTDs = tr[i].getElementsByTagName("td");

        for (index = 0; index < allTDs.length; index++) {
          txtValue = allTDs[index].textContent || allTDs[index].innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            break;
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
</script>
