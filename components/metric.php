<div style="width: max-content;">
    <div class="metric">
        <div class="metric-text">
            <div class="metric-title">
                Todays sales
            </div>

            <div class="metric-value">
                2,456
            </div>
        </div>

        <div class="metric-chart">
            <canvas id="metric-canvas" width="100" height="100"></canvas>
            <div class="chart-text">
                <i class="fas fa-user" style="font-size: 20px"></i>
            </div>
        </div>
    </div>
</div>

<script>
    var canvas = document.getElementById('metric-canvas');
    var circleProgressBar = new CircleProgressBar(canvas, {
        lineWidth: 8,
        radius: 42, // width / 2 - lineWidth
        colors: ['#0000FF', '#4B0082', '#9400D3'],

    });
    // set initial value
    circleProgressBar.setValue(0.9);
</script>