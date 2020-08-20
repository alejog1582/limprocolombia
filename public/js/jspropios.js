$('.datepicker').datepicker({
    format: "dd/mm/yyyy",
    weekStart: 0,
    startDate: "+2d",
    endDate: "+30d",
    clearBtn: true,
    language: "es",
    multidate: false,
    daysOfWeekDisabled: "0,6",
    autoclose: true,
    todayHighlight: true
  });