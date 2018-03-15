function isEquivalent (a, b) {
    if ( !(a instanceof Object) || !(b instanceof Object)) {
        return false;
    }
    // Create arrays of property names
    let aProps = Object.getOwnPropertyNames(a);
    let bProps = Object.getOwnPropertyNames(b);

    // If number of properties is different,
    // Object are not equivalent
    // if (aProps.length != bProps.length) {
    //     return false;
    // }

    for (let i = 0; i < aProps.length; i++) {
        let propName = aProps[i];
        // If values of same property are not equal,
        // object are not equivalent
        if (a[propName] != b[propName]) {
            return false;
        }
    }
    return true;
}

export default { isEquivalent }