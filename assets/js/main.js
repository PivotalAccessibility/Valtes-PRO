jQuery(document).ready(() => {
    const $ = jQuery;
    const isMobile = window.matchMedia("(max-width: 767px)");

    $('#commentform').each((i, form) => {
        $(form).find('input:not([type="radio"]):not([type="checkbox"]):not([type="hidden"]):not([style="display: none;"]), select, textarea').each((i, input) => {
            const label = $(form).find(`label[for="${input.getAttribute('id')}"]`);

            input.addEventListener("invalid", function (event) {
                let message = '';

                if (event.target.value.length < 1) {
                    message = `${label.text().trim()} is required`;
                } else {
                    message = `${label.text().trim()} is invalid`;
                }

                if (isMobile.matches) {
                    input.setCustomValidity(message);
                    announceToScreenReader(message, 'alert', 100, true);
                } else {
                    input.setCustomValidity(message);
                }
            });

            input.addEventListener("input", function (event) {
                input.setCustomValidity("");
            });
        });
    });

    $('.valtes_pagination').each((i, pagination) => {
        $(pagination).find('a.prev.page-numbers').parent().addClass('prev-item');
        $(pagination).find('a.next.page-numbers').parent().addClass('next-item');
    });

    $('.wpj-jtoc').each((i, toc) => {
        const toggle = $(toc).find('.wpj-jtoc--toggle');
        const label = $(toc).find('.wpj-jtoc--title-label');

        label.attr({
            'role': 'heading',
            'aria-level': 2,
        });

        toggle.attr({
            'role': 'button',
            'tabindex': 0,
            'aria-label': `${label.text().trim()} Toggle`,
            'aria-expanded': toc.classList.contains('--jtoc-is-unfolded'),
        });

        toggle.on('click', () => {
            toggle.attr('aria-expanded', !toc.classList.contains('--jtoc-is-unfolded'));
        })
    });

    $('.flipcard').each((i, flipcard) => {
        const buttons = flipcard.querySelectorAll('.flipcard__button');
        const front = flipcard.querySelector('.flipcard__front');
        const back = flipcard.querySelector('.flipcard__back');

        if (buttons.length < 1) {
            return
        }

        back.setAttribute('aria-hidden', true);
        $(back).find('a, button').attr('tabindex', -1);

        function handleChange() {
            if (flipcard.classList.contains('flipped')) {
                front.setAttribute('aria-hidden', true);
                back.removeAttribute('aria-hidden');

                $(back).find('a, button').removeAttr('tabindex');
                $(front).find('a, button').attr('tabindex', -1);

                const flipToBackButton = $(flipcard).find('.flipcard__button--back');

                flipToBackButton.focus();

                announceToScreenReader(`${flipToBackButton.attr('aria-label')}`);
            } else {
                back.setAttribute('aria-hidden', true);
                front.removeAttribute('aria-hidden');

                $(front).find('a, button').removeAttr('tabindex');
                $(back).find('a, button').attr('tabindex', -1);

                const flipToFrontButton = $(flipcard).find('.flipcard__button--front');

                flipToFrontButton.focus();

                announceToScreenReader(`${flipToFrontButton.attr('aria-label')}`);
            }
        }

        buttons.forEach((button) => {
            button.addEventListener('click', () => {
                flipcard.classList.toggle('flipped');
                handleChange();
            });
        });
    });

    $('.forminator-file-upload span').text('Er is geen bestand geselecteerd');

    $('.forminator-file-upload button.forminator-button-upload').text('Selecteer een bestand');
    function handleForminatorField(i, input) {
        const placeholder = $(input).attr('placeholder');
        const label = $(input).prev('label');

        if (input.value === '') {
            label.removeClass('floating');
        }

        $(input).removeAttr('placeholder');

        $(input).on('mouseenter focus', () => {
            label.addClass('floating');
            $(input).attr('placeholder', placeholder);
        });

        $(input).on('mouseleave blur', (e) => {
            if (e.target.value === '') {
                label.removeClass('floating');
                $(input).removeAttr('placeholder');
            }
        });

        $(input).on('input change', (e) => {
            if (document.activeElement !== e.target && e.target.value === '') {
                label.removeClass('floating');
                $(input).removeAttr('placeholder');
            }
        });
    };

    $('.footer__form').each((i, form) => {
        $(form).find('.forminator-email--field').each(handleForminatorField)
    });

    // $('.contact__form').each((i, form) => {
    //     $(form).find('.forminator-input').each(handleForminatorField)
    // });

    handleDesktopMenu();
    handleEmbla();
});

function handleDesktopMenu() {
    const $ = jQuery;

    const menuItems = document.querySelectorAll('.menu-item');

    if (menuItems.length > 0) {
        menuItems.forEach((item) => {
            handleMenuItem(item);
        });
    }

    function handleMenuItem(item) {
        const anchor = item.querySelector('a');
        const toggle = item.querySelector('.menu-toggle');
        const submenu = item.querySelector('.sub-menu');

        if (!toggle || !submenu || !anchor) {
            return;
        }

        toggle.setAttribute('aria-label', `${anchor.textContent.trim()}`);

        toggle.addEventListener('click', () => {
            item.classList.toggle('toggled');
            toggle.setAttribute('aria-expanded', item.classList.contains('toggled'));
        });

        anchor.addEventListener('keydown', (e) => {
            if (e.key === 'Tab' && e.shiftKey) {
                item.classList.remove('toggled');
            }
        });

        handleSubMenu(item, submenu)
    }

    window.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            const item = e.target.closest('.toggled');

            if (!item) {
                return
            }

            const toggle = item.querySelector('.menu-toggle');

            item.classList.remove('toggled');

            if (toggle) {
                toggle.focus();
            }
        }
    });

    function handleSubMenu(item, menu) {
        const items = menu.querySelectorAll('.menu-item');
        const last = items[items.length - 1];
        const lastAnchor = last.querySelector('a');

        if (lastAnchor) {
            lastAnchor.addEventListener('keydown', (e) => {
                if (e.key === 'Tab' && !e.shiftKey) {
                    item.classList.remove('toggled');
                }
            });
        }
    }

}

function handleEmbla() {
    const OPTIONS = {};

    const node = document.querySelector('.embla');

    if (!node) {
        return
    }

    const viewport = node.querySelector('.embla__viewport');
    const prev = node.querySelector('.embla__prev');
    const next = node.querySelector('.embla__next');

    const embla = EmblaCarousel(viewport, OPTIONS);

    embla.on('select', () => {
        handleNavState();
    });

    embla.on('init', () => {
        handleNavState();
    });

    function handleNavState() {
        if (prev) {
            if (embla.canScrollPrev()) {
                prev.removeAttribute('disabled');
            } else {
                prev.setAttribute('disabled', 'disabled');
            }
        }

        if (next) {
            if (embla.canScrollNext()) {
                next.removeAttribute('disabled');
            } else {
                next.setAttribute('disabled', 'disabled');
            }
        }
    }

    function handleSlideChangeAnnouncement() {
        announceToScreenReader(`You are on slide ${embla.selectedScrollSnap() + 1}/${embla.internalEngine().slideIndexes.length}`)
    }

    if (prev) {
        prev.addEventListener('click', (e) => {
            embla.scrollPrev();
            handleSlideChangeAnnouncement();
        });
    }

    if (next) {
        next.addEventListener('click', (e) => {
            embla.scrollNext();
            handleSlideChangeAnnouncement();
        });
    }
}

let liveElementTimeout = null;

function announceToScreenReader(text, role, timeout = 1000, once = false) {
    if (once && liveElementTimeout) {
        return;
    }

    const liveElement = document.querySelector(".live-status-region");
    const paraElement = document.createElement("p");
    const textElement = document.createTextNode(text);

    if (!liveElement) {
        return;
    }

    liveElement.setAttribute("role", role === undefined ? "status" : role);
    paraElement.appendChild(textElement);
    liveElement.appendChild(paraElement);

    liveElementTimeout = setTimeout(() => {
        liveElement.innerHTML = "";
        liveElement.setAttribute("role", "status");
        liveElementTimeout = null;
    }, timeout);
}


document.addEventListener("alpine:init", () => {
    Alpine.data("header", () => ({
        scroll: {
            x: 0,
            y: 0,
        },
        showSidebar: false,
        showForm: false,
        historyChangeListener: null,
        pin: false,
        notTop: false,

        show(state) {
            this[state] = true;
            window.location.hash = `#${state}`;

            this.historyChangeListener = (e) => {
                if (!location.hash) {
                    this.hide(state);
                }
            };

            window.addEventListener("hashchange", this.historyChangeListener);
        },

        hide(state) {
            this[state] = false;
            history.replaceState(null, null, " ");
            window.removeEventListener("hashchange", this.historyChangeListener);
        },
        init() {
            this.update(this.scroll);

            window.addEventListener(
                "scroll",
                throttle(() => {
                    this.update(this.scroll);
                }, 250)
            );
        },

        update(prev) {
            this.scroll = {
                y: window.pageYOffset || document.documentElement.scrollTop,
                x: window.pageXOffset || document.documentElement.scrollLeft,
            };

            if (this.scroll.y > 0) {
                this.notTop = true;
            } else {
                this.notTop = false;
            }

            if (this.scroll.y > 100) {
                this.pin = true;
            }

            if (this.scroll.y < prev.y) {
                this.pin = false;
            }
        },
    }));

    Alpine.data("search", () => ({
        focused: false,
        debounceTimeout: null,
        results: [],
        state: 'idle',

        init() {
            this.handleFocused();

            this.$refs.input.addEventListener('input', (e) => {
                const query = e.target.value;
                const selectedPostTypes = ['post', 'page'];

                clearTimeout(this.debounceTimeout);

                if (e.target.value.length <= 2) {
                    this.results = []
                    return;
                }

                this.debounceTimeout = setTimeout(() => {
                    var formData = new FormData();
                    formData.append('action', 'valtes_index_search');
                    formData.append('query', query);
                    formData.append('post_types', JSON.stringify(selectedPostTypes));

                    this.results = [];
                    this.state = 'searching'

                    fetch(pivotalaccessibilityData.ajaxURL, {
                        method: 'POST',
                        body: formData,
                    })
                        .then(response => response.json())
                        .then(data => {
                            this.state = 'searched'
                            this.results = data
                        })
                        .catch(error => {
                            this.state = 'searched'
                            console.error('Error:', error);
                        });
                }, 300);
            });

            this.$refs.input.addEventListener('focus', (e) => {
                this.focused = true
            });

            this.$refs.input.addEventListener('blur', (e) => {
                this.handleFocused();
            });
        },

        handleFocused() {
            if (this.$refs.input.value) {
                this.focused = true
            } else {
                this.focused = false
            }
        }
    }));

    Alpine.magic('clipboard', () => {
        if (!navigator.clipboard) {
            return
        }

        const toast = new Toast();

        return subject => {
            toast
                .setMessage('Link copied to the clipboard')
                .setDuration(200000)
                .setDismissButton(true)
                .setPosition('bottom-right')
                .show();

            navigator.clipboard.writeText(subject)
        }
    });

    Alpine.directive('embla', (el, { value, modifiers, expression }, { Alpine, effect, cleanup }) => {

        if (!value) {
            Alpine.bind(el, {
                "x-data": () => ({
                    embla: null,
                    activeIndex: 0,
                    canScrollNext: true,
                    canScrollPrev: true,

                    emblaPrev() {
                        this.embla?.scrollPrev();
                    },

                    emblaNext() {
                        this.embla?.scrollNext();
                    },
                }),
            });
        } else if (value === 'main') {
            const autplayDelay = modifierValue(modifiers, 'autoplay', false);
            const autoplayOpttions = {
                delay: parseInt(autplayDelay),
            }

            Alpine.bind(el, {
                "x-init"() {
                    const handleDisabledState = () => {
                        this.canScrollNext = this.embla.canScrollNext();
                        this.canScrollPrev = this.embla.canScrollPrev();
                    }

                    window.addEventListener("load", () => {
                        const plugins = [];

                        if (autplayDelay) {
                            plugins.push(EmblaCarouselAutoplay(autoplayOpttions));
                        }

                        this.embla = EmblaCarousel(el, {
                            loop: modifierValue(modifiers, 'loop', false) === '1' ? true : false,
                            align: modifierValue(modifiers, 'align', 'center')
                        }, plugins);

                        this.embla.on('select', () => {
                            this.activeIndex = this.embla.selectedScrollSnap();
                        });

                        this.embla.on('select', handleDisabledState);
                        this.embla.on('settle', handleDisabledState);
                        this.embla.on('init', handleDisabledState);
                        this.embla.on('scroll', handleDisabledState);
                        this.embla.on('resize', handleDisabledState);

                        window.addEventListener('keydown', (e) => {
                            if (e.key === 'ArrowLeft') {
                                this.embla.scrollPrev();
                            } else if (e.key === 'ArrowRight') {
                                this.embla.scrollNext();
                            }
                        })
                    });
                },
            });
        } else if (value === 'page') {
            Alpine.bind(el, {
                "x-on:click.prevent"() {
                    this.embla?.scrollTo(parseInt(expression))
                }
            });
        } else if (value === 'next') {
            Alpine.bind(el, {
                "x-on:click.prevent"(e) {
                    this.embla?.scrollNext();
                },
            });
        } else if (value === 'prev') {
            Alpine.bind(el, {
                "x-on:click.prevent"(e) {
                    this.embla?.scrollPrev();
                },
            });
        }

        return () => {
            embla.destroy();
        };
    });

    Alpine.directive('lazy-src', (el, { value }) => {
        const imgSrc = value;

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting || entry.intersectionRatio > 0) {
                        el.setAttribute('src', imgSrc);
                        observer.unobserve(el);
                    }
                });
            });

            observer.observe(el);
            el.setAttribute('src', 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'); // Transparent base64 image
        } else {
            // Fallback for browsers that don't support Intersection Observer
            el.setAttribute('src', imgSrc);
        }
    });
});

function throttle(func) {
    let queued = false;

    return function (...args) {
        if (!queued) {
            queued = true;
            requestAnimationFrame(() => {
                func.apply(this, args);
                queued = false;
            });
        }
    };
}

function modifierValue(modifiers, key, fallback) {
    if (modifiers.indexOf(key) === -1) return fallback;

    const rawValue = modifiers[modifiers.indexOf(key) + 1];

    if (!rawValue) return fallback;

    return rawValue;
}

document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter-count");

    const observerOptions = {
        root: null,
        rootMargin: "0px",
        threshold: 1,
    };

    const startCounter = (counter) => {
        const target = parseInt(counter.getAttribute("data-target"), 10);
        const duration = 4000; // Max duration in milliseconds (4 seconds)
        const interval = 10; // Update interval in milliseconds
        const step = Math.max(1, Math.ceil(target / (duration / interval))); // Step per interval

        let count = 0;
        let animationFrameId;
        counter.textContent = count;
        const startTime = performance.now();

        const updateCounter = () => {
            const elapsedTime = performance.now() - startTime;

            if (elapsedTime < duration && count < target) {
                count = Math.min(count + step, target);
                counter.textContent = count;
                animationFrameId = requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target; // Ensure it reaches exact target
            }
        };

        updateCounter();

        // Store animation frame ID to stop it later
        counter.dataset.animationFrameId = animationFrameId;
    };

    const resetCounter = (counter) => {
        // Stop any ongoing animation
        if (counter.dataset.animationFrameId) {
            cancelAnimationFrame(counter.dataset.animationFrameId);
        }
        counter.textContent = "0"; // Reset text content
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                resetCounter(entry.target);
                startCounter(entry.target);
            }
        });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
});

document.getElementById('copyLinkButton').addEventListener('click', (event) => {
    event.preventDefault(); // Prevent page from jumping due to href="#"
    const url = window.location.href;

    navigator.clipboard.writeText(url)
      .then(() => {
        console.log('URL copied to clipboard:', url);
        showCustomToast(url);
      })
      .catch(err => {
        console.error('Failed to copy URL:', err);
      });
  });

  function showCustomToast(url) {
    const toast = document.getElementById('customToast');
    toast.innerHTML = `Link gekopieerd!!<br><span>${url}</span>`;
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 4000); 
  }