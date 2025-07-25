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
    const genderCtx = document.getElementById('genderChart').getContext('2d');
    if(genderCtx && window.genderBarChart)
    new Chart(genderCtx, {
        type: 'bar',
        data: {
            labels: window/genderBarChart,
            datasets: [{
                label: 'Laki-laki',
                data: window.genderBarChart.laki,
                backgroundColor: '#3b82f6'
                },
                {
                    label: 'Laki-laki',
                data: window.genderBarChart.laki,
                backgroundColor: '#ec4899',
                // backgroundColor: [silverColors.primary, silverColors.accent],
                // borderWidth: 3,
                // borderColor: '#ffffff',
                // hoverOffset: 10
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels:{
                        color: '#1e293b'
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: '#334155'
                    }
                },
                x: {
                    ticks: {
                        color: '#334155'
                    }
                }
            }
        }
    });

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
    const jobCtx = document.getElementById('jobChart').getContext('2d');
    new Chart(jobCtx, {
        type: 'bar',
        data: {
            labels: ['Pelajar', 'Mahasiswa', 'PNS', 'Umum', 'Lainnya'],
            datasets: [{
                label: 'Jumlah Pengunjung',
                data: [251, 688, 121, 303, 163],
                backgroundColor: [
                    silverColors.primary,
                    silverColors.secondary,
                    silverColors.accent,
                    silverColors.light,
                    silverColors.dark
                ],
                borderRadius: 8,
                borderSkipped: false
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

    // Book Categories Chart
    const bookCtx = document.getElementById('bookChart').getContext('2d');
    new Chart(bookCtx, {
        type: 'polarArea',
        data: {
            labels: ['Teknologi (600)', 'Sastra (800)', 'Sejarah (900)', 'Agama (200)', 'Filsafat (100)'],
            datasets: [{
                data: [20, 186, 19, 41, 16],
                backgroundColor: [
                    silverColors.primary + '80',
                    silverColors.secondary + '80',
                    silverColors.accent + '80',
                    silverColors.light + '80',
                    silverColors.dark + '80'
                ],
                borderColor: [
                    silverColors.primary,
                    silverColors.secondary,
                    silverColors.accent,
                    silverColors.light,
                    silverColors.dark
                ],
                borderWidth: 2
            }]
        },
        options: {
            ...chartConfig,
            scales: {
                r: {
                    display: false,
                    beginAtZero: true
                }
            }
        }
    });

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