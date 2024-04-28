<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <style>
        .container{
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }
        form{
            background-color: gray;
            padding: 3rem 8rem;
            border-radius: 5px;

        }
        .form-group{
            margin-bottom: 21px;
        }
        .label{
            font-size: 20px;
            margin-right: 5px;
        }
        .form-control{
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 5px;
            font-size: 15px;
            font-weight: bold;
        }
        .btn{
            padding: 10px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }
        
    </style>
</head>
<body>
    <div class="container" >
        <h2>Create New Task</h2>
    <form action="api/v1/tasks" method="POST">
        @csrf
                    <div class="form-group">
                        <label class="label" for="name">Task Name:</label>
                        <input
                            type="text"
                            class="form-control"
                            id="name"
                            name="name"
                            placeholder="Enter Task Name"
                            required
                            
                        />
                    </div>
                    <div class="form-group">
                        <label class="label" for="name">Priority:</label>
                        <select class="form-control" name="priority_id" id="priority" >
                        <option value="" selected disabled>Select Priority</option>
                        <option value="1">High</option>
                        <option value="2">Medium</option>
                        <option value="3">Low</option>
                        </select>
                    </div>
                    <button
                        type="submit"
                        class="btn"
                        id="roleSubmitBtn"
                        style="background: #355b11; color: white;border-radius: 5px; width: 100%;"
                    >
                        Create New
                    </button>
            </form>
    </div>
</body>
</html>