Imports System.Data.OleDb
Public Class SignUpUTP
    Dim conn As New OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:\Users\Tham Qi Lien\source\repos\FITMAKERLOGIN_SIGNUP\VP FITMAKER DATABASE.accdb")
    Dim passwordVisible As Boolean = False
    Dim confirmPasswordVisible As Boolean = False
    Private Sub SignUpUTP_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        txtPassword.PasswordChar = "*"c
        txtComfirmPassword.PasswordChar = "*"c
        ' Load the default (eye closed)
        picTogglePassword.Image = My.Resources.hide
        picTogglePassword2.Image = My.Resources.hide
    End Sub

    ' For txtPassword and picTogglePassword
    Private Sub picTogglePassword_Click(sender As Object, e As EventArgs) Handles picTogglePassword.Click
        If passwordVisible Then
            txtPassword.PasswordChar = "*"c
            picTogglePassword.Image = My.Resources.hide
            passwordVisible = False
        Else
            txtPassword.PasswordChar = ControlChars.NullChar
            picTogglePassword.Image = My.Resources.show
            passwordVisible = True
        End If
    End Sub

    ' For txtComfirmPassword and picTogglePassword2
    Private Sub picTogglePassword2_Click(sender As Object, e As EventArgs) Handles picTogglePassword2.Click
        If confirmPasswordVisible Then
            txtComfirmPassword.PasswordChar = "*"c
            picTogglePassword2.Image = My.Resources.hide
            confirmPasswordVisible = False
        Else
            txtComfirmPassword.PasswordChar = ControlChars.NullChar
            picTogglePassword2.Image = My.Resources.show
            confirmPasswordVisible = True
        End If
    End Sub


    Private Sub btnResetPassword_Click(sender As Object, e As EventArgs) Handles btnSignUp.Click
        Dim fullName As String = txtFullName.Text.Trim()
        Dim username As String = txtUsername.Text.Trim()
        Dim email As String = txtEmail.Text.Trim()
        Dim phone As String = txtPhone.Text.Trim()
        Dim studentID As String = txtStudentID.Text.Trim()
        Dim password As String = txtPassword.Text.Trim()
        Dim confirmPassword As String = txtComfirmPassword.Text.Trim()
        Dim gender As String = If(rdbMale.Checked, "Male", If(rdbFemale.Checked, "Female", ""))

        ' Validation
        If fullName = "" Or username = "" Or email = "" Or phone = "" Or studentID = "" Or password = "" Or confirmPassword = "" Or gender = "" Then
            MessageBox.Show("Please fill in all fields.", "Missing Info", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            Return
        End If

        If password <> confirmPassword Then
            MessageBox.Show("Passwords do not match.", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error)
            Return
        End If

        Try
            conn.Open()

            ' Check if email already exists
            Dim checkCmd As New OleDbCommand("SELECT COUNT(*) FROM [User Info] WHERE Email = ?", conn)
            checkCmd.Parameters.AddWithValue("?", email)
            Dim count As Integer = Convert.ToInt32(checkCmd.ExecuteScalar())

            If count > 0 Then
                MessageBox.Show("This email is already registered.", "Duplicate Email", MessageBoxButtons.OK, MessageBoxIcon.Error)
                conn.Close()
                Return
            End If

            ' INSERT INTO [User Info] table
            Dim insertCmd As New OleDbCommand("INSERT INTO [User Info] ([Full Name], [Username], [Email], [Phone], [Student ID], [Password], [Gender], [Is UTP Student], [Subscription Type], [Remember Me]) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", conn)


            insertCmd.Parameters.AddWithValue("?", fullName)
            insertCmd.Parameters.AddWithValue("?", username)
            insertCmd.Parameters.AddWithValue("?", email)
            insertCmd.Parameters.AddWithValue("?", phone)
            insertCmd.Parameters.AddWithValue("?", studentID)
            insertCmd.Parameters.AddWithValue("?", password)
            insertCmd.Parameters.AddWithValue("?", gender)
            insertCmd.Parameters.AddWithValue("?", True) ' Is UTP Student
            insertCmd.Parameters.AddWithValue("?", "None") ' Subscription Type
            insertCmd.Parameters.AddWithValue("?", False) ' Remember Me

            insertCmd.ExecuteNonQuery()
            conn.Close()

            MessageBox.Show("Registration successful!", "Success", MessageBoxButtons.OK, MessageBoxIcon.Information)

            ' Optionally redirect to Login
            Me.Hide()
            LoginUTP.Show()

        Catch ex As Exception
            MessageBox.Show("Database error: " & ex.Message, "Error", MessageBoxButtons.OK, MessageBoxIcon.Error)
        End Try
    End Sub

    Private Sub btnBack_Click(sender As Object, e As EventArgs) Handles btnBack.Click
        Me.Hide()
        Dim LoginUTP As New LoginUTP()
        LoginUTP.Show()
    End Sub


End Class