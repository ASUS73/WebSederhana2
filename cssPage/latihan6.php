<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Latihan 6</title>
    <style>
      input[type="text"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type="submit"] {
        width: 100%;
        background-color: #4caf4c;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type="submit"]:hover {
        background-color: #45a049;
      }

      div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
      .w-100 {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <h3>CSS 2</h3>
    <div class="container">
      <form action="latihan6.html">
        <label for="name">Name</label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Your name..."
          class="form-control"
        />

        <label for="address">Address</label>
        <textarea name="address" id="address" rows="5" class="w-100"></textarea>

        <label for="country"><br />Country</label>
        <select id="country" name="country" class="w-100">
          <option>Select...</option>
          <option value="united_kingdom">United Kingdom</option>
          <option value="rusia">Rusia</option>
          <option value="usa">USA</option>
        </select>

        <input type="submit" name="submit" value="Submit" />
      </form>
    </div>
  </body>
</html>