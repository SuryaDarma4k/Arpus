document.addEventListener('DOMContentLoaded', function() {
    // Silver color palette
    const silverColors = {
        primary: '#64748b',
        secondary: '#475569',
        accent: '#94a3b8',
        light: '#e2e8f0',
        dark: '#334155'
    };

    // Chart configurations
    const chartConfig = {
        responsive: true,
        maintainAspectRatio: true,
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                enabled: true,
                backgroundColor: 'rgba(0, 0, 0, 0.8)',
                titleColor: '#ffffff',
                bodyColor: '#ffffff',
                cornerRadius: 8
            }
        }
    };

    // Gender Chart
    const genderMonthlyCtx = document.getElementById('genderChart')?.getContext('2d');
    
    if (genderMonthlyCtx && window.genderBarChart) {
    new Chart(genderMonthlyCtx, {
        type: 'bar',
        data: {
            labels: window.genderBarChart.labels,
            datasets: [
                {
                    label: 'Laki-laki',
                    data: window.genderBarChart.laki,
                    backgroundColor: '#cbd5e1', // abu silver muda
                    borderRadius: 8
                },
                {
                    label: 'Perempuan',
                    data: window.genderBarChart.perempuan,
                    backgroundColor: '#a78bfa', // ungu pastel
                    borderRadius: 8
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        color: '#334155' // slate-700, kontras
                    }
                },
                tooltip: {
                    backgroundColor: '#1e293b', // slate gelap
                    titleColor: '#fff',
                    bodyColor: '#fff'
                },
                datalabels: {
                    color: '#1e293b',
                    anchor: 'end',
                    align: 'start',
                    font: {
                        weight: 'bold'
                    },
                    formatter: (value) => value
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#475569'
                    },
                    grid: {
                        color: '#e2e8f0'
                    }
                },
                x: {
                    ticks: {
                        color: '#475569'
                    },
                    grid: {
                        display: false
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    });
}

    // Monthly Visitors Chart
    const monthlyCtx = document.getElementById('monthlyChart').getContext('2d');
    new Chart(monthlyCtx, {
        type: 'line',
        data: {
            labels: ['Januari', 'Februari', 'Maret'],
            datasets: [{
                label: 'Total Pengunjung',
                data: [634, 466, 426],
                borderColor: silverColors.primary,
                backgroundColor: silverColors.light,
                fill: true,
                tension: 0.4,
                pointBackgroundColor: silverColors.primary,
                pointBorderColor: '#ffffff',
                pointBorderWidth: 3,
                pointRadius: 6
            }]
        },
        options: {
            ...chartConfig,
            scales: {
                y: {
                    display: false,
                    beginAtZero: true
                },
                x: {
                    display: false
                }
            }
        }
    });

    // Job Categories Chart
    const jobCtx = document.getElementById('jobChart')?.getContext('2d');

if (jobCtx && window.jobChart) {
    new Chart(jobCtx, {
        type: 'line',
        data: {
            labels: window.jobChart.labels,
            datasets: [
                {
                    label: 'Pelajar',
                    data: window.jobChart.pelajar,
                    borderColor: '#8b5cf6', // ungu
                    backgroundColor: '#8b5cf6',
                    tension: 0.4,
                    fill: false,
                    pointRadius: 4,
                    pointBackgroundColor: '#8b5cf6'
                },
                {
                    label: 'Mahasiswa',
                    data: window.jobChart.mahasiswa,
                    borderColor: '#db2777', // fuchsia tua
                    backgroundColor: '#db2777',
                    tension: 0.4,
                    fill: false,
                    pointRadius: 4,
                    pointBackgroundColor: '#db2777'
                },
                {
                    label: 'PNS',
                    data: window.jobChart.pns,
                    borderColor: '#facc15', // kuning pastel
                    backgroundColor: '#facc15',
                    tension: 0.4,
                    fill: false,
                    pointRadius: 4,
                    pointBackgroundColor: '#facc15'
                },
                {
                    label: 'Umum',
                    data: window.jobChart.umum,
                    borderColor: '#3b82f6', // biru
                    backgroundColor: '#3b82f6',
                    tension: 0.4,
                    fill: false,
                    pointRadius: 4,
                    pointBackgroundColor: '#3b82f6'
                },
                {
                    label: 'Lainnya',
                    data: window.jobChart.lainnya,
                    borderColor: '#14b8a6', // hijau toska
                    backgroundColor: '#14b8a6',
                    tension: 0.4,
                    fill: false,
                    pointRadius: 4,
                    pointBackgroundColor: '#14b8a6'
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        color: '#334155'
                    }
                },
                tooltip: {
                    backgroundColor: '#1e293b',
                    titleColor: '#fff',
                    bodyColor: '#fff'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: { color: '#475569' },
                    grid: { color: '#e2e8f0' }
                },
                x: {
                    ticks: { color: '#475569' },
                    grid: { display: false }
                }
            }
        }
    });
}

    // Book Categories Chart

    const bookCtx = document.getElementById('bookChart')?.getContext('2d');
    
    if (bookCtx && window.bookChart) {
    new Chart(bookCtx, {
        type: 'bar',
        data: {
            labels: window.bookChart.labels,
            datasets: [
                { label: '000', data: window.bookChart.b000, backgroundColor: '#e0e7ff' },
                { label: '100', data: window.bookChart.b100, backgroundColor: '#c4b5fd' },
                { label: '200', data: window.bookChart.b200, backgroundColor: '#a78bfa' },
                { label: '300', data: window.bookChart.b300, backgroundColor: '#7c3aed' },
                { label: '400', data: window.bookChart.b400, backgroundColor: '#9333ea' },
                { label: '500', data: window.bookChart.b500, backgroundColor: '#6366f1' },
                { label: '600', data: window.bookChart.b600, backgroundColor: '#60a5fa' },
                { label: '700', data: window.bookChart.b700, backgroundColor: '#38bdf8' },
                { label: '800', data: window.bookChart.b800, backgroundColor: '#06b6d4' },
                { label: '900', data: window.bookChart.b900, backgroundColor: '#10b981' },
                { label: 'Fiksi', data: window.bookChart.fiksi, backgroundColor: '#f59e0b' },
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        color: '#334155' // slate-700, kontras
                    }
                },
                tooltip: {
                    backgroundColor: '#1e293b', // slate gelap
                    titleColor: '#fff',
                    bodyColor: '#fff'
                },
                datalabels: {
                    color: '#1e293b',
                    anchor: 'end',
                    align: 'start',
                    font: {
                        weight: 'bold'
                    },
                    formatter: (value) => value
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#475569'
                    },
                    grid: {
                        color: '#e2e8f0'
                    }
                },
                x: {
                    ticks: {
                        color: '#475569'
                    },
                    grid: {
                        display: false
                    }
                }
            }
        },
        plugins: [ChartDataLabels]
    });
}

//     const bookCtx = document.getElementById('bookChart')?.getContext('2d');

// if (bookCtx && window.bookChart) {
//     new Chart(bookCtx, {
//         type: 'bar',
//         data: {
//             labels: window.bookChart.labels,
//             datasets: [
//                 { label: '000', data: window.bookChart.b000, backgroundColor: '#e0e7ff' },
//                 { label: '100', data: window.bookChart.b100, backgroundColor: '#c4b5fd' },
//                 { label: '200', data: window.bookChart.b200, backgroundColor: '#a78bfa' },
//                 { label: '300', data: window.bookChart.b300, backgroundColor: '#7c3aed' },
//                 { label: '400', data: window.bookChart.b400, backgroundColor: '#9333ea' },
//                 { label: '500', data: window.bookChart.b500, backgroundColor: '#6366f1' },
//                 { label: '600', data: window.bookChart.b600, backgroundColor: '#60a5fa' },
//                 { label: '700', data: window.bookChart.b700, backgroundColor: '#38bdf8' },
//                 { label: '800', data: window.bookChart.b800, backgroundColor: '#06b6d4' },
//                 { label: '900', data: window.bookChart.b900, backgroundColor: '#10b981' },
//                 { label: 'Fiksi', data: window.bookChart.fiksi, backgroundColor: '#f59e0b' },
//             ]
//         },
//         options: {
//             responsive: true,
//             plugins: {
//                 legend: {
//                     position: 'right',
//                     labels: {
//                         color: '#334155'
//                     }
//                 },
//                 tooltip: {
//                     backgroundColor: '#1e293b',
//                     titleColor: '#fff',
//                     bodyColor: '#fff'
//                 }
//             },
//             scales: {
//                 y: {
//                     beginAtZero: true,
//                     ticks: { color: '#475569' },
//                     grid: { color: '#e2e8f0' }
//                 },
//                 x: {
//                     ticks: { color: '#475569' },
//                     grid: { display: false }
//                 }
//             }
//         }
//     });
// }


    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Add fade-in animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    // Observe all chart containers
    document.querySelectorAll('.bg-white').forEach(el => {
        observer.observe(el);
    });

    // Dynamic counter animation
    function animateCounter(element, target, duration = 2000) {
        // Validate target is a valid number
        if (isNaN(target) || target === null || target === undefined) {
            return;
        }
        
        let start = 0;
        const increment = target / (duration / 16);
        
        const timer = setInterval(() => {
            start += increment;
            const currentValue = Math.floor(start);
            element.textContent = currentValue.toLocaleString();
            
            if (start >= target) {
                element.textContent = target.toLocaleString();
                clearInterval(timer);
            }
        }, 16);
    }

    // Animate counters when they come into view
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const originalText = entry.target.textContent.trim();
                const target = parseInt(originalText.replace(/[^\d]/g, ''));
                
                // Only animate if we have a valid number
                if (!isNaN(target) && target > 0) {
                    animateCounter(entry.target, target);
                }
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    // Observe counter elements
    document.querySelectorAll('.text-4xl.font-bold, .text-3xl.font-bold').forEach(counter => {
        counterObserver.observe(counter);
    });
});