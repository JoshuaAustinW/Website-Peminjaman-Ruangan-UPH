class Ruangan {
  constructor(number, type, capacity, location) {
    this.number = number;
    this.type = type;
    this.capacity = capacity;
    this.location = location;
  }

  // Add methods here
  getNumber() {
    return this.number;
  }

  getType() {
    return this.type;
  }

  getCapacity() {
    return this.capacity;
  }

  getLocation() {
    return this.location;
  }

  setNumber(number) {
    this.number = number;
  }

  setType(type) {
    this.type = type;
  }

  setCapacity(capacity) {
    this.capacity = capacity;
  }

  setLocation(location) {
    this.location = location;
  }
}
