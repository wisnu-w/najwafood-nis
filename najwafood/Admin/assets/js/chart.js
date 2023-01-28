var ctx = $("#line-chart");
var LineChart = new CharacterData(ctx, {
    type: 'line',
    data: {
        labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","sep","Oct","Nov","Dec"],
        datasets: [
            {
                label: "2022",
                data: [10,8,6,5,12,8,16,17,6,7,6,10]
            }
        ]
    }
});