/**
 * Portfolio JavaScript Engine — Khaerul Oktafiansyah
 * Dual Theme (Dark/Light), Project Filter, Dynamic Chart.js & Interactions
 */

document.addEventListener('DOMContentLoaded', () => {
  initThemeEngine();
  initMobileNav();
  initProjectFilters();
  initThesisChart();
  initSmoothScroll();
});

/**
 * 1. Dual Theme Toggle Engine (Dark / Light Mode)
 */
function initThemeEngine() {
  const toggleBtn = document.getElementById('theme-toggle');
  if (!toggleBtn) return;

  toggleBtn.addEventListener('click', () => {
    const isDark = document.documentElement.classList.contains('dark');
    const newTheme = isDark ? 'light' : 'dark';

    if (newTheme === 'dark') {
      document.documentElement.classList.add('dark');
      document.documentElement.style.colorScheme = 'dark';
    } else {
      document.documentElement.classList.remove('dark');
      document.documentElement.style.colorScheme = 'light';
    }

    localStorage.setItem('theme', newTheme);

    // Update Chart.js if present
    if (window.bbcaChartInstance) {
      updateChartTheme(window.bbcaChartInstance);
    }
  });

  // Listen to OS system preference changes
  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
    if (!localStorage.getItem('theme')) {
      if (e.matches) {
        document.documentElement.classList.add('dark');
        document.documentElement.style.colorScheme = 'dark';
      } else {
        document.documentElement.classList.remove('dark');
        document.documentElement.style.colorScheme = 'light';
      }
      if (window.bbcaChartInstance) {
        updateChartTheme(window.bbcaChartInstance);
      }
    }
  });
}

/**
 * 2. Mobile Navigation Drawer
 */
function initMobileNav() {
  const toggleBtn = document.getElementById('mobile-nav-toggle');
  const navMenu = document.getElementById('nav-menu');

  if (toggleBtn && navMenu) {
    toggleBtn.addEventListener('click', () => {
      navMenu.classList.toggle('open');
      const isOpen = navMenu.classList.contains('open');
      toggleBtn.setAttribute('aria-expanded', isOpen);
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !toggleBtn.contains(e.target) && navMenu.classList.contains('open')) {
        navMenu.classList.remove('open');
      }
    });
  }
}

/**
 * 3. Project Filterable Tabs
 */
function initProjectFilters() {
  const filterButtons = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card-item');

  if (!filterButtons.length || !projectCards.length) return;

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      // Set active button
      filterButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filterValue = btn.getAttribute('data-filter');

      projectCards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filterValue === 'all' || category === filterValue) {
          card.style.display = 'flex';
          card.style.opacity = '0';
          setTimeout(() => {
            card.style.opacity = '1';
          }, 50);
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
}

/**
 * 4. Interactive Thesis Chart (BBCA Stock Price Prediction)
 */
function initThesisChart() {
  const chartCanvas = document.getElementById('bbcaChart');
  if (!chartCanvas || typeof Chart === 'undefined') return;

  // Retrieve raw data from data attributes or global window
  const chartDataEl = document.getElementById('thesis-chart-data');
  let chartData = {
    labels: ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5'],
    actual: [9850, 9900, 9950, 10000, 10100],
    predicted: [9840, 9890, 9960, 10010, 10090]
  };

  if (chartDataEl) {
    try {
      chartData = JSON.parse(chartDataEl.textContent);
    } catch (e) {
      console.warn('Could not parse thesis chart data:', e);
    }
  }

  const isDark = document.documentElement.classList.contains('dark');
  const textColor = isDark ? '#9ca3af' : '#475569';
  const gridColor = isDark ? 'rgba(255, 255, 255, 0.08)' : 'rgba(0, 0, 0, 0.06)';

  const ctx = chartCanvas.getContext('2d');
  window.bbcaChartInstance = new Chart(ctx, {
    type: 'line',
    data: {
      labels: chartData.labels,
      datasets: [
        {
          label: 'Harga Aktual BBCA (Rp)',
          data: chartData.actual,
          borderColor: '#10b981',
          backgroundColor: 'rgba(16, 185, 129, 0.12)',
          fill: true,
          tension: 0.35,
          borderWidth: 2.5,
          pointRadius: 3,
          pointHoverRadius: 6,
          pointBackgroundColor: '#10b981'
        },
        {
          label: 'Hasil Prediksi Model ML (Rp)',
          data: chartData.predicted,
          borderColor: '#6366f1',
          backgroundColor: 'rgba(99, 102, 241, 0.05)',
          borderDash: [5, 5],
          fill: false,
          tension: 0.35,
          borderWidth: 2.5,
          pointRadius: 3,
          pointHoverRadius: 6,
          pointBackgroundColor: '#6366f1'
        }
      ]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      interaction: {
        mode: 'index',
        intersect: false
      },
      plugins: {
        legend: {
          position: 'top',
          labels: {
            color: textColor,
            font: {
              family: "'Plus Jakarta Sans', sans-serif",
              weight: '600'
            },
            padding: 16
          }
        },
        tooltip: {
          backgroundColor: isDark ? '#1f2937' : '#ffffff',
          titleColor: isDark ? '#ffffff' : '#0f172a',
          bodyColor: isDark ? '#e5e7eb' : '#334155',
          borderColor: isDark ? '#374151' : '#e2e8f0',
          borderWidth: 1,
          padding: 12,
          boxPadding: 6,
          callbacks: {
            label: function(context) {
              return ` ${context.dataset.label}: Rp ${context.parsed.y.toLocaleString('id-ID')}`;
            }
          }
        }
      },
      scales: {
        x: {
          grid: { color: gridColor },
          ticks: { color: textColor, font: { family: "'Plus Jakarta Sans', sans-serif" } }
        },
        y: {
          grid: { color: gridColor },
          ticks: {
            color: textColor,
            font: { family: "'Plus Jakarta Sans', sans-serif" },
            callback: function(value) {
              return 'Rp ' + value.toLocaleString('id-ID');
            }
          }
        }
      }
    }
  });
}

function updateChartTheme(chart) {
  const isDark = document.documentElement.classList.contains('dark');
  const textColor = isDark ? '#9ca3af' : '#475569';
  const gridColor = isDark ? 'rgba(255, 255, 255, 0.08)' : 'rgba(0, 0, 0, 0.06)';

  chart.options.plugins.legend.labels.color = textColor;
  chart.options.scales.x.grid.color = gridColor;
  chart.options.scales.x.ticks.color = textColor;
  chart.options.scales.y.grid.color = gridColor;
  chart.options.scales.y.ticks.color = textColor;
  chart.options.plugins.tooltip.backgroundColor = isDark ? '#1f2937' : '#ffffff';
  chart.options.plugins.tooltip.titleColor = isDark ? '#ffffff' : '#0f172a';
  chart.options.plugins.tooltip.bodyColor = isDark ? '#e5e7eb' : '#334155';
  chart.options.plugins.tooltip.borderColor = isDark ? '#374151' : '#e2e8f0';
  chart.update();
}

/**
 * 5. Smooth Scroll Helper
 */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId.length > 1) {
        const target = document.querySelector(targetId);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  });
}
