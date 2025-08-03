Imports System.Data.OleDb

Public Class LoginUTP
    ' Connection to Access database
    Dim conn As New OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=C:\Users\Tham Qi Lien\source\repos\FITMAKERLOGIN_SIGNUP\VP FITMAKER DATABASE.accdb")
    'Dim dbPath As String = Application.StartupPath & "\VP FITMAKER DATABASE.accdb"
    'Dim conn As New OleDbConnection("Provider=Microsoft.ACE.OLEDB.12.0;Data Source=" & dbPath)


    ' Login button
    Private Sub btnLogin_Click(sender As Object, e As EventArgs) Handles btnLogin.Click
        Dim email As String = txtEmail.Text.Trim()
        Dim password As String = txtPassword.Text
        Dim studentID As String = txtStudentID.Text.Trim()

        ' Check if fields are filled
        If email = "" Or password = "" Or studentID = "" Then
            MessageBox.Show("Please fill in all fields.", "Missing Information", MessageBoxButtons.OK, MessageBoxIcon.Warning)
            Exit Sub
        End If

        Try
            conn.Open()

            ' Query to check if user exists
            Dim query As String = "SELECT * FROM [User Info] WHERE Email=? AND Password=? AND [Student ID]=? AND [Is UTP Student]=True"
            Dim cmd As New OleDbCommand(query, conn)
            cmd.Parameters.AddWithValue("?", email)
            cmd.Parameters.AddWithValue("?", password)
            cmd.Parameters.AddWithValue("?", studentID)

            Dim reader As OleDbDataReader = cmd.ExecuteReader()

            If reader.HasRows Then
                reader.Read()

                Dim fullName As String = reader("Full Name").ToString()
                Dim gender As String = reader("Gender").ToString()
                Dim subscription As String = reader("Subscription Type").ToString()

                ' Remember Me checkbox
                If ckbRememberMe.Checked Then
                    Dim updateQuery As String = "UPDATE [User Info] SET [Remember Me]=True WHERE Email=?"
                    Dim updateCmd As New OleDbCommand(updateQuery, conn)
                    updateCmd.Parameters.AddWithValue("?", email)
                    updateCmd.ExecuteNonQuery()
                End If

                MessageBox.Show("Welcome, " & fullName & "!", "Login Successful", MessageBoxButtons.OK, MessageBoxIcon.Information)

                ' Move to next form (replace with your own)
                Me.Hide()
                'Dim mainForm As New MainForm()
                'mainForm.Show()
            Else
                MessageBox.Show("Login failed. Check your email, password, or student ID.", "Login Failed", MessageBoxButtons.OK, MessageBoxIcon.Error)
            End If

            conn.Close()

        Catch ex As Exception
            MessageBox.Show("Database error: " & ex.Message)
            If conn.State = ConnectionState.Open Then conn.Close()
        End Try
    End Sub

    ' Back button
    Private Sub btnBack_Click(sender As Object, e As EventArgs) Handles btnBack.Click
        Me.Hide()
        Dim startupForm As New StartupPage()
        startupForm.Show()
    End Sub

    ' Validate Student ID
    Private Sub txtStudentID_TextChanged(sender As Object, e As EventArgs) Handles txtStudentID.TextChanged
        Dim sid As Integer
        If Not Integer.TryParse(txtStudentID.Text, sid) AndAlso txtStudentID.Text.Length > 0 Then
            MsgBox("Only numbers allowed for Student ID.", MsgBoxStyle.Critical, "Invalid Input")
            txtStudentID.Clear()
        End If
    End Sub

    ' Register Here link
    Private Sub linklbRegisterHere_LinkClicked(sender As Object, e As LinkLabelLinkClickedEventArgs) Handles linklbRegisterHere.LinkClicked
        Me.Hide()
        Dim signUpForm As New SignUpUTP()
        signUpForm.Show()
    End Sub

    ' Forgot Password link
    Private Sub linklbForgetPassword_LinkClicked(sender As Object, e As LinkLabelLinkClickedEventArgs) Handles linklbForgetPassword.LinkClicked
        Me.Hide()
        Dim resetForm As New ResetPasswordEmail()
        resetForm.Show()
    End Sub

    Private Sub LoginUTP_Load(sender As Object, e As EventArgs) Handles MyBase.Load

    End Sub
End Class
