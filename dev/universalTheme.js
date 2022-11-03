
var bearCMS = bearCMS || {};
bearCMS.universalTheme = bearCMS.universalTheme || (function () {

    var initializeNavigation = function () {
        try {
            responsiveAttributes.run();
        } catch (e) {

        }
        var element = document.querySelector(".template-navigation");
        var containerElement = document.querySelector('.template-navigation-container');

        var lastSetUpdateKey = null;
        var navigationElement = document.querySelector('.template-navigation-items');
        var additionalButtons = document.querySelector('.template-navigation-additional-buttons');
        var hasAdditionalButtons = additionalButtons !== null;
        var navigationMenuElement = element.querySelector('ul');
        var setNavigationMenuType = function (type) {
            if (navigationMenuElement !== null) {
                navigationMenuElement.setAttribute('data-nm-type', type);
            }
        };
        var fragment = document.createDocumentFragment();
        function update() {
            var navType = containerElement.getAttribute('data-nav-type');
            var navLayout = containerElement.getAttribute('data-nav-layout-' + navType);
            var updateKey = navType + '/' + navLayout;
            if (lastSetUpdateKey === updateKey) {
                return;
            }
            lastSetUpdateKey = updateKey;
            fragment.appendChild(navigationElement);
            if (hasAdditionalButtons) {
                fragment.appendChild(additionalButtons);
            }
            var activateToggleButton = function (button, container, onShow, onHide) {
                var attributeName = 'data-bearcms-template-visibility';
                var toggle = function () {
                    if (container.getAttribute(attributeName) !== 'visible') {
                        container.setAttribute(attributeName, 'visible');
                        if (typeof onShow !== 'undefined') {
                            onShow();
                        }
                    } else {
                        container.removeAttribute(attributeName);
                        if (typeof onHide !== 'undefined') {
                            onHide();
                        }
                    }
                };
                button.addEventListener('click', function () {
                    toggle();
                });
                button.toggle = toggle;
            };
            if (navType === 'horizontal') {
                element.innerHTML = '';
                setNavigationMenuType('horizontal-down');
                element.appendChild(navigationElement);
                if (hasAdditionalButtons) {
                    element.appendChild(additionalButtons);
                }
            } else if (navType === 'button-block') {
                var toggleButtonIsOnLeft = navLayout === 'toggle-left';
                element.innerHTML = '<div class="template-navigation-buttons">' +
                    '<div class="template-navigation-button-toggle-container"><div class="template-navigation-button-toggle"></div></div>' +
                    '</div>' +
                    '<div class="template-navigation-items-container"></div>';
                var itemsContainer = element.lastChild;
                var buttonsContainer = element.firstChild;
                var toggleButtonContainer = buttonsContainer.firstChild;
                var toggleButton = toggleButtonContainer.firstChild;
                itemsContainer.appendChild(navigationElement);
                if (hasAdditionalButtons) {
                    if (toggleButtonIsOnLeft) {
                        buttonsContainer.appendChild(additionalButtons);
                    } else {
                        buttonsContainer.insertBefore(additionalButtons, toggleButtonContainer);
                    }
                }
                setNavigationMenuType('none');
                activateToggleButton(toggleButton, itemsContainer);
            } else if (navType === 'button-overlay') {
                var openFromLeft = navLayout === 'toggle-left';
                var toggleButtonIsOnLeft = navLayout === 'toggle-left';
                element.innerHTML = '<div class="template-navigation-items-overlay">' +
                    '<div class="template-navigation-items-background"></div>' +
                    '<div class="template-navigation-items-container"><div class="template-navigation-items-close-button-container"><div class="template-navigation-items-close-button"></div></div></div>' +
                    '</div>' +
                    '<div class="template-navigation-buttons">' +
                    '<div class="template-navigation-button-toggle-container"><div class="template-navigation-button-toggle"></div></div>' +
                    '</div>';
                var overlayContainer = element.firstChild;
                var itemsContainer = overlayContainer.lastChild;
                var buttonsContainer = element.lastChild;
                var toggleButtonContainer = buttonsContainer.firstChild;
                var toggleButton = toggleButtonContainer.firstChild;
                var closeButton = itemsContainer.firstChild.firstChild;
                itemsContainer.appendChild(navigationElement);
                if (hasAdditionalButtons) {
                    if (toggleButtonIsOnLeft) {
                        buttonsContainer.appendChild(additionalButtons);
                    } else {
                        buttonsContainer.insertBefore(additionalButtons, toggleButtonContainer);
                    }
                }
                setNavigationMenuType(openFromLeft ? 'vertical-right' : 'vertical-left');
                activateToggleButton(toggleButton, overlayContainer);
                itemsContainer.addEventListener('mousedown', function (event) {
                    event.stopPropagation();
                });
                itemsContainer.addEventListener('click', function (event) {
                    event.stopPropagation();
                });
                overlayContainer.addEventListener('click', function (event) {
                    event.stopPropagation();
                    toggleButton.toggle();
                });
                closeButton.addEventListener('click', function (event) {
                    event.stopPropagation();
                    toggleButton.toggle();
                });
            } else if (navType === 'button-drop-down') {
                var alignLeft = navLayout === 'toggle-left';
                var toggleButtonIsOnLeft = navLayout === 'toggle-left';
                element.innerHTML = '<div class="template-navigation-items-container"></div>' +
                    '<div class="template-navigation-buttons">' +
                    '<div class="template-navigation-button-toggle-container"><div class="template-navigation-button-toggle"></div></div>' +
                    '</div>';
                var itemsContainer = element.firstChild;
                var buttonsContainer = element.lastChild;
                var toggleButtonContainer = buttonsContainer.firstChild;
                var toggleButton = toggleButtonContainer.firstChild;
                itemsContainer.appendChild(navigationElement);
                if (hasAdditionalButtons) {
                    if (toggleButtonIsOnLeft) {
                        buttonsContainer.appendChild(additionalButtons);
                    } else {
                        buttonsContainer.insertBefore(additionalButtons, toggleButtonContainer);
                    }
                }
                setNavigationMenuType(alignLeft ? 'vertical-right' : 'vertical-left');
                var updateContainer = function () {
                    var itemsContainerClientRect = itemsContainer.getBoundingClientRect();
                    var itemsContainerWidth = itemsContainerClientRect.width;
                    var toggleButtonClientRect = toggleButton.getBoundingClientRect();
                    var containerElementClientRect = containerElement.getBoundingClientRect();
                    var top = Math.ceil(toggleButtonClientRect.height + toggleButtonClientRect.top - containerElementClientRect.top);
                    var left = toggleButtonClientRect.left - containerElementClientRect.left + (alignLeft ? 0 : -itemsContainerWidth + toggleButtonClientRect.width);
                    if (left < 0) {
                        left = 0;
                    }
                    var bodyWidth = document.body.clientWidth;
                    if (left + itemsContainerWidth > bodyWidth) {
                        left = bodyWidth - itemsContainerWidth;
                    }
                    itemsContainer.style.top = top + 'px';
                    itemsContainer.style.left = left + 'px';
                };
                var resizeObserver = null;
                if (typeof ResizeObserver !== 'undefined') {
                    resizeObserver = new ResizeObserver(() => {
                        updateContainer();
                    });
                };
                activateToggleButton(toggleButton, itemsContainer, function () {
                    updateContainer();
                    window.addEventListener('resize', updateContainer);
                    window.addEventListener('scroll', updateContainer);
                    document.body.addEventListener('mousedown', toggleButton.toggle);
                    if (resizeObserver !== null) {
                        resizeObserver.observe(itemsContainer, { box: 'border-box' });
                    }
                }, function () {
                    window.removeEventListener('resize', updateContainer);
                    window.removeEventListener('scroll', updateContainer);
                    document.body.removeEventListener('mousedown', toggleButton.toggle);
                    if (resizeObserver !== null) {
                        resizeObserver.unobserve(itemsContainer);
                    }
                });
                toggleButton.addEventListener('mousedown', function (event) {
                    event.stopPropagation();
                });
                itemsContainer.addEventListener('mousedown', function (event) {
                    event.stopPropagation();
                });
            }
        };

        window.addEventListener('resize', update);
        window.addEventListener('orientationchange', update);
        update();
        (new MutationObserver(update)).observe(containerElement, { attributes: true });
    };

    return {
        initializeNavigation
    };

}());