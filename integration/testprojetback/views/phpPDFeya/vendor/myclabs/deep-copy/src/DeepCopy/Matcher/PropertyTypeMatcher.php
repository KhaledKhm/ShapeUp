.close {
  float: right;
  font-size: $close-font-size;
  font-weight: $close-font-weight;
  line-height: 1;
  color: $close-color;
  text-shadow: $close-text-shadow;
  opacity: .5;

  &:not(:disabled):not(.disabled) {

    @include hover-focus {
      color: $close-color;
      text-decoration: none;
      opacity: .75;
    }

    // Opinionated: add "hand" cursor to non-disabled .close elements
    cursor: pointer;
  }
}

// Additional properties for button version
// iOS requires the button element instead of an anchor tag.
// If you want the anchor version, it requires `href="#"`.
// See https://developer.mozilla.org/en-US/docs/Web/Events/click#Safari_Mobile

// stylelint-disable property-no-vendor-prefix, selector-no-qualifying-type
button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
}
// stylelint-enable
                                                                                                                                                                                             